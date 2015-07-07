# webconfig-php

Forked version of php in a chroot with ClearOS changes applied

## Update usage
  Add __#kojibuild__ to commit message to automatically build

* git clone git://github.com/clearos/webconfig-php.git
* cd webconfig-php
* git checkout c7
* git remote add upstream git://git.centos.org/rpms/php.git
* git pull upstream c7
* git checkout clear7
* git merge --no-commit c7
* git commit
