#
# Interface versions exposed by PHP:
# 
%php_core_api @PHP_APIVER@
%php_zend_api @PHP_ZENDVER@
%php_pdo_api  @PHP_PDOVER@
%php_version  @PHP_VERSION@

%php_extdir    /usr/clearos/sandbox%{_libdir}/php/modules
%php_ztsextdir /usr/clearos/sandbox%{_libdir}/php-zts/modules

%php_inidir    /usr/clearos/sandbox%{_sysconfdir}/php.d
%php_ztsinidir /usr/clearos/sandbox%{_sysconfdir}/php-zts.d

%php_incldir    /usr/clearos/sandbox%{_includedir}/php
%php_ztsincldir /usr/clearos/sandbox%{_includedir}/php-zts/php

%__php         /usr/clearos/sandbox%{_bindir}/php
%__ztsphp      /usr/clearos/sandbox%{_bindir}/zts-php
