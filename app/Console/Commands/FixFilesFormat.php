<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Parser\MarkdownParser;
use Wnx\CommonmarkMarkdownRenderer\MarkdownRendererExtension;
use Wnx\CommonmarkMarkdownRenderer\Renderer\MarkdownRenderer;
class FixFilesFormat extends Command
{
 
    protected $signature = 'app:fix-files-format';


    protected $description = '';


    public function handle()
    {
        $environment = new Environment();
        $environment->addExtension(new MarkdownRendererExtension());

        $markdownParser = new MarkdownParser($environment);
        $markdownRenderer = new MarkdownRenderer($environment);

        $markdown = file_get_contents(resource_path('docs/11.x/strings.md'));


        $documentAST = $markdownParser->parse($markdown);

        foreach ($documentAST->children() as $child) {
            if($child instanceof \League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode){
                $newNode = new \League\CommonMark\Extension\CommonMark\Node\Block\FencedCode(3, '`', 0);
                $newNode->setLiteral($child->getLiteral());
                $child->replaceWith($newNode);
            }


        }       

        $markdown = $markdownRenderer->renderDocument($documentAST);
        $markdown = file_put_contents(resource_path('docs/11.x/strings.md'), $markdown);
        return 0;
    }
}
