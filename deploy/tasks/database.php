<?php

namespace Deployer;

desc('Execute kaliop migrations');
task('database:kaliop:migrate', function () {
    run('{{bin/php}} {{bin/console}} kaliop:migration:migrate --env={{symfony_env}}');
});
