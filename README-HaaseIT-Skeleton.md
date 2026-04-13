yarn install

yarn encore prod
yarn encore dev --watch



bin/console pimcore:bundle:install PimcoreGenericDataIndexBundle
bin/console pimcore:bundle:install PimcoreGenericExecutionEngineBundle
bin/console pimcore:bundle:install PimcoreStudioUiBundle
bin/console pimcore:bundle:install PimcoreStudioBackendBundle

./bin/console pimcore:deployment:classes-rebuild
./bin/console generic-data-index:update:index -r
