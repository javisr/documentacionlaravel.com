#!/bin/bash

DOCS_VERSIONS=(
  11.x
)

for v in "${DOCS_VERSIONS[@]}"; do
    if [ -d "resources/docs/$v" ]; then
        echo "Pulling latest documentation updates for $v..."
        (cd resources/docs/$v && git pull)
    else
        echo "Cloning $v..."
        git clone --single-branch --branch "$v" https://github.com/aprendelaravel/docs.git "resources/docs/$v"
    fi;
done
