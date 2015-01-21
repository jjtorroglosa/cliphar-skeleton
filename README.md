# Cliphar

A project template for building cliphar apps

## Usage

    composer create-project cliphar/cliphar-skeleton
    cd cliphar-skeleton
    git init
    git add -A
    git commit -am"First commit"
    composer update --no-dev
    box build
    php cliphar-skeleton.phar

To be able to compile the phar you need to install [box](https://github.com/box-project/box2)

*Note: Keep in mind that box requires the option `phar.readonly = false` in your php.ini

For more info about usage read the [Cliphar docs](https://github.com/jjtorroglosa/cliphar)


