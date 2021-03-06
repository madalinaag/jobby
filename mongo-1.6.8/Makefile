srcdir = /var/www/html/jobby/mongo-1.6.8
builddir = /var/www/html/jobby/mongo-1.6.8
top_srcdir = /var/www/html/jobby/mongo-1.6.8
top_builddir = /var/www/html/jobby/mongo-1.6.8
EGREP = /bin/grep -E
SED = /bin/sed
CONFIGURE_COMMAND = './configure' '--enable-mongo' '--with-php-config=php-config' '--prefix=/usr/lib/php5/'
CONFIGURE_OPTIONS = '--enable-mongo' '--with-php-config=php-config' '--prefix=/usr/lib/php5/'
SHLIB_SUFFIX_NAME = so
SHLIB_DL_SUFFIX_NAME = so
ZEND_EXT_TYPE = zend_extension
RE2C = exit 0;
AWK = gawk
shared_objects_mongo = php_mongo.lo mongo.lo mongoclient.lo bson.lo cursor.lo command_cursor.lo cursor_shared.lo collection.lo db.lo io_stream.lo log_stream.lo contrib/crypto.lo contrib/php-json.lo contrib/php-ssl.lo gridfs/gridfs.lo gridfs/gridfs_cursor.lo gridfs/gridfs_file.lo gridfs/gridfs_stream.lo exceptions/exception.lo exceptions/connection_exception.lo exceptions/duplicate_key_exception.lo exceptions/cursor_exception.lo exceptions/protocol_exception.lo exceptions/cursor_timeout_exception.lo exceptions/execution_timeout_exception.lo exceptions/gridfs_exception.lo exceptions/result_exception.lo exceptions/write_concern_exception.lo types/bin_data.lo types/code.lo types/date.lo types/db_ref.lo types/id.lo types/int32.lo types/int64.lo types/regex.lo types/timestamp.lo util/log.lo util/pool.lo mcon/bson_helpers.lo mcon/collection.lo mcon/connections.lo mcon/manager.lo mcon/mini_bson.lo mcon/parse.lo mcon/read_preference.lo mcon/str.lo mcon/utils.lo mcon/contrib/md5.lo mcon/contrib/strndup.lo api/wire_version.lo api/write.lo api/batch.lo batch/write.lo batch/insert.lo batch/update.lo batch/delete.lo
PHP_PECL_EXTENSION = mongo
PHP_MODULES = $(phplibdir)/mongo.la
PHP_ZEND_EX =
all_targets = $(PHP_MODULES) $(PHP_ZEND_EX)
install_targets = install-modules install-headers
prefix = /usr
exec_prefix = $(prefix)
libdir = ${exec_prefix}/lib
prefix = /usr
phplibdir = /var/www/html/jobby/mongo-1.6.8/modules
phpincludedir = /usr/include/php/20151012
CC = cc
CFLAGS = -g -O2
CFLAGS_CLEAN = $(CFLAGS)
CPP = cc -E
CPPFLAGS = -DHAVE_CONFIG_H
CXX =
CXXFLAGS =
CXXFLAGS_CLEAN = $(CXXFLAGS)
EXTENSION_DIR = /usr/lib/php/20151012
PHP_EXECUTABLE = /usr/bin/php7.0
EXTRA_LDFLAGS =
EXTRA_LIBS =
INCLUDES = -I/usr/include/php/20151012 -I/usr/include/php/20151012/main -I/usr/include/php/20151012/TSRM -I/usr/include/php/20151012/Zend -I/usr/include/php/20151012/ext -I/usr/include/php/20151012/ext/date/lib -I/var/www/html/jobby/mongo-1.6.8/api -I/var/www/html/jobby/mongo-1.6.8/util -I/var/www/html/jobby/mongo-1.6.8/exceptions -I/var/www/html/jobby/mongo-1.6.8/gridfs -I/var/www/html/jobby/mongo-1.6.8/types -I/var/www/html/jobby/mongo-1.6.8/batch -I/var/www/html/jobby/mongo-1.6.8/contrib -I/var/www/html/jobby/mongo-1.6.8/mcon -I/var/www/html/jobby/mongo-1.6.8/mcon/contrib
LFLAGS =
LDFLAGS =
SHARED_LIBTOOL =
LIBTOOL = $(SHELL) $(top_builddir)/libtool
SHELL = /bin/bash
INSTALL_HEADERS =
mkinstalldirs = $(top_srcdir)/build/shtool mkdir -p
INSTALL = $(top_srcdir)/build/shtool install -c
INSTALL_DATA = $(INSTALL) -m 644

DEFS = -DPHP_ATOM_INC -I$(top_builddir)/include -I$(top_builddir)/main -I$(top_srcdir)
COMMON_FLAGS = $(DEFS) $(INCLUDES) $(EXTRA_INCLUDES) $(CPPFLAGS) $(PHP_FRAMEWORKPATH)

all: $(all_targets) 
	@echo
	@echo "Build complete."
	@echo "Don't forget to run 'make test'."
	@echo

build-modules: $(PHP_MODULES) $(PHP_ZEND_EX)

build-binaries: $(PHP_BINARIES)

libphp$(PHP_MAJOR_VERSION).la: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(LIBTOOL) --mode=link $(CC) $(CFLAGS) $(EXTRA_CFLAGS) -rpath $(phptempdir) $(EXTRA_LDFLAGS) $(LDFLAGS) $(PHP_RPATHS) $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@
	-@$(LIBTOOL) --silent --mode=install cp $@ $(phptempdir)/$@ >/dev/null 2>&1

libs/libphp$(PHP_MAJOR_VERSION).bundle: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(CC) $(MH_BUNDLE_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) $(EXTRA_LDFLAGS) $(PHP_GLOBAL_OBJS:.lo=.o) $(PHP_SAPI_OBJS:.lo=.o) $(PHP_FRAMEWORKS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@ && cp $@ libs/libphp$(PHP_MAJOR_VERSION).so

install: $(all_targets) $(install_targets)

install-sapi: $(OVERALL_TARGET)
	@echo "Installing PHP SAPI module:       $(PHP_SAPI)"
	-@$(mkinstalldirs) $(INSTALL_ROOT)$(bindir)
	-@if test ! -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); then \
		for i in 0.0.0 0.0 0; do \
			if test -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i; then \
				$(LN_S) $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); \
				break; \
			fi; \
		done; \
	fi
	@$(INSTALL_IT)

install-binaries: build-binaries $(install_binary_targets)

install-modules: build-modules
	@test -d modules && \
	$(mkinstalldirs) $(INSTALL_ROOT)$(EXTENSION_DIR)
	@echo "Installing shared extensions:     $(INSTALL_ROOT)$(EXTENSION_DIR)/"
	@rm -f modules/*.la >/dev/null 2>&1
	@$(INSTALL) modules/* $(INSTALL_ROOT)$(EXTENSION_DIR)

install-headers:
	-@if test "$(INSTALL_HEADERS)"; then \
		for i in `echo $(INSTALL_HEADERS)`; do \
			i=`$(top_srcdir)/build/shtool path -d $$i`; \
			paths="$$paths $(INSTALL_ROOT)$(phpincludedir)/$$i"; \
		done; \
		$(mkinstalldirs) $$paths && \
		echo "Installing header files:           $(INSTALL_ROOT)$(phpincludedir)/" && \
		for i in `echo $(INSTALL_HEADERS)`; do \
			if test "$(PHP_PECL_EXTENSION)"; then \
				src=`echo $$i | $(SED) -e "s#ext/$(PHP_PECL_EXTENSION)/##g"`; \
			else \
				src=$$i; \
			fi; \
			if test -f "$(top_srcdir)/$$src"; then \
				$(INSTALL_DATA) $(top_srcdir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			elif test -f "$(top_builddir)/$$src"; then \
				$(INSTALL_DATA) $(top_builddir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			else \
				(cd $(top_srcdir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i; \
				cd $(top_builddir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i) 2>/dev/null || true; \
			fi \
		done; \
	fi

PHP_TEST_SETTINGS = -d 'open_basedir=' -d 'output_buffering=0' -d 'memory_limit=-1'
PHP_TEST_SHARED_EXTENSIONS =  ` \
	if test "x$(PHP_MODULES)" != "x"; then \
		for i in $(PHP_MODULES)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d extension=$$dlname"; \
		done; \
	fi; \
	if test "x$(PHP_ZEND_EX)" != "x"; then \
		for i in $(PHP_ZEND_EX)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d $(ZEND_EXT_TYPE)=$(top_builddir)/modules/$$dlname"; \
		done; \
	fi`
PHP_DEPRECATED_DIRECTIVES_REGEX = '^(magic_quotes_(gpc|runtime|sybase)?|(zend_)?extension(_debug)?(_ts)?)[\t\ ]*='

test: all
	@if test ! -z "$(PHP_EXECUTABLE)" && test -x "$(PHP_EXECUTABLE)"; then \
		INI_FILE=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r 'echo php_ini_loaded_file();' 2> /dev/null`; \
		if test "$$INI_FILE"; then \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_FILE" > $(top_builddir)/tmp-php.ini; \
		else \
			echo > $(top_builddir)/tmp-php.ini; \
		fi; \
		INI_SCANNED_PATH=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r '$$a = explode(",\n", trim(php_ini_scanned_files())); echo $$a[0];' 2> /dev/null`; \
		if test "$$INI_SCANNED_PATH"; then \
			INI_SCANNED_PATH=`$(top_srcdir)/build/shtool path -d $$INI_SCANNED_PATH`; \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_SCANNED_PATH"/*.ini >> $(top_builddir)/tmp-php.ini; \
		fi; \
		TEST_PHP_EXECUTABLE=$(PHP_EXECUTABLE) \
		TEST_PHP_SRCDIR=$(top_srcdir) \
		CC="$(CC)" \
			$(PHP_EXECUTABLE) -n -c $(top_builddir)/tmp-php.ini $(PHP_TEST_SETTINGS) $(top_srcdir)/run-tests.php -n -c $(top_builddir)/tmp-php.ini -d extension_dir=$(top_builddir)/modules/ $(PHP_TEST_SHARED_EXTENSIONS) $(TESTS); \
		TEST_RESULT_EXIT_CODE=$$?; \
		rm $(top_builddir)/tmp-php.ini; \
		exit $$TEST_RESULT_EXIT_CODE; \
	else \
		echo "ERROR: Cannot run tests without CLI sapi."; \
	fi

clean:
	find . -name \*.gcno -o -name \*.gcda | xargs rm -f
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f 
	find . -name \*.so | xargs rm -f
	find . -name .libs -a -type d|xargs rm -rf
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_MILTER_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

distclean: clean
	rm -f Makefile config.cache config.log config.status Makefile.objects Makefile.fragments libtool main/php_config.h main/internal_functions_cli.c main/internal_functions.c stamp-h sapi/apache/libphp$(PHP_MAJOR_VERSION).module sapi/apache_hooks/libphp$(PHP_MAJOR_VERSION).module buildmk.stamp Zend/zend_dtrace_gen.h Zend/zend_dtrace_gen.h.bak Zend/zend_config.h TSRM/tsrm_config.h
	rm -f php7.spec main/build-defs.h scripts/phpize
	rm -f ext/date/lib/timelib_config.h ext/mbstring/oniguruma/config.h ext/mbstring/libmbfl/config.h ext/oci8/oci8_dtrace_gen.h ext/oci8/oci8_dtrace_gen.h.bak
	rm -f scripts/man1/phpize.1 scripts/php-config scripts/man1/php-config.1 sapi/cli/php.1 sapi/cgi/php-cgi.1 ext/phar/phar.1 ext/phar/phar.phar.1
	rm -f sapi/fpm/php-fpm.conf sapi/fpm/init.d.php-fpm sapi/fpm/php-fpm.service sapi/fpm/php-fpm.8 sapi/fpm/status.html
	rm -f ext/iconv/php_have_bsd_iconv.h ext/iconv/php_have_glibc_iconv.h ext/iconv/php_have_ibm_iconv.h ext/iconv/php_have_iconv.h ext/iconv/php_have_libiconv.h ext/iconv/php_iconv_aliased_libiconv.h ext/iconv/php_iconv_supports_errno.h ext/iconv/php_php_iconv_h_path.h ext/iconv/php_php_iconv_impl.h
	rm -f ext/phar/phar.phar ext/phar/phar.php
	if test "$(srcdir)" != "$(builddir)"; then \
	  rm -f ext/phar/phar/phar.inc; \
	fi
	$(EGREP) define'.*include/php' $(top_srcdir)/configure | $(SED) 's/.*>//'|xargs rm -f

prof-gen:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-generate all

prof-clean:
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f 
	find . -name \*.so | xargs rm -f
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_MILTER_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

prof-use:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-use all


.PHONY: all clean install distclean test prof-gen prof-clean prof-use
.NOEXPORT:
php_mongo.lo: /var/www/html/jobby/mongo-1.6.8/php_mongo.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/php_mongo.c -o php_mongo.lo 
mongo.lo: /var/www/html/jobby/mongo-1.6.8/mongo.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mongo.c -o mongo.lo 
mongoclient.lo: /var/www/html/jobby/mongo-1.6.8/mongoclient.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mongoclient.c -o mongoclient.lo 
bson.lo: /var/www/html/jobby/mongo-1.6.8/bson.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/bson.c -o bson.lo 
cursor.lo: /var/www/html/jobby/mongo-1.6.8/cursor.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/cursor.c -o cursor.lo 
command_cursor.lo: /var/www/html/jobby/mongo-1.6.8/command_cursor.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/command_cursor.c -o command_cursor.lo 
cursor_shared.lo: /var/www/html/jobby/mongo-1.6.8/cursor_shared.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/cursor_shared.c -o cursor_shared.lo 
collection.lo: /var/www/html/jobby/mongo-1.6.8/collection.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/collection.c -o collection.lo 
db.lo: /var/www/html/jobby/mongo-1.6.8/db.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/db.c -o db.lo 
io_stream.lo: /var/www/html/jobby/mongo-1.6.8/io_stream.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/io_stream.c -o io_stream.lo 
log_stream.lo: /var/www/html/jobby/mongo-1.6.8/log_stream.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/log_stream.c -o log_stream.lo 
contrib/crypto.lo: /var/www/html/jobby/mongo-1.6.8/contrib/crypto.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/contrib/crypto.c -o contrib/crypto.lo 
contrib/php-json.lo: /var/www/html/jobby/mongo-1.6.8/contrib/php-json.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/contrib/php-json.c -o contrib/php-json.lo 
contrib/php-ssl.lo: /var/www/html/jobby/mongo-1.6.8/contrib/php-ssl.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/contrib/php-ssl.c -o contrib/php-ssl.lo 
gridfs/gridfs.lo: /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs.c -o gridfs/gridfs.lo 
gridfs/gridfs_cursor.lo: /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_cursor.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_cursor.c -o gridfs/gridfs_cursor.lo 
gridfs/gridfs_file.lo: /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_file.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_file.c -o gridfs/gridfs_file.lo 
gridfs/gridfs_stream.lo: /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_stream.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/gridfs/gridfs_stream.c -o gridfs/gridfs_stream.lo 
exceptions/exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/exception.c -o exceptions/exception.lo 
exceptions/connection_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/connection_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/connection_exception.c -o exceptions/connection_exception.lo 
exceptions/duplicate_key_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/duplicate_key_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/duplicate_key_exception.c -o exceptions/duplicate_key_exception.lo 
exceptions/cursor_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/cursor_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/cursor_exception.c -o exceptions/cursor_exception.lo 
exceptions/protocol_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/protocol_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/protocol_exception.c -o exceptions/protocol_exception.lo 
exceptions/cursor_timeout_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/cursor_timeout_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/cursor_timeout_exception.c -o exceptions/cursor_timeout_exception.lo 
exceptions/execution_timeout_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/execution_timeout_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/execution_timeout_exception.c -o exceptions/execution_timeout_exception.lo 
exceptions/gridfs_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/gridfs_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/gridfs_exception.c -o exceptions/gridfs_exception.lo 
exceptions/result_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/result_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/result_exception.c -o exceptions/result_exception.lo 
exceptions/write_concern_exception.lo: /var/www/html/jobby/mongo-1.6.8/exceptions/write_concern_exception.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/exceptions/write_concern_exception.c -o exceptions/write_concern_exception.lo 
types/bin_data.lo: /var/www/html/jobby/mongo-1.6.8/types/bin_data.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/bin_data.c -o types/bin_data.lo 
types/code.lo: /var/www/html/jobby/mongo-1.6.8/types/code.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/code.c -o types/code.lo 
types/date.lo: /var/www/html/jobby/mongo-1.6.8/types/date.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/date.c -o types/date.lo 
types/db_ref.lo: /var/www/html/jobby/mongo-1.6.8/types/db_ref.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/db_ref.c -o types/db_ref.lo 
types/id.lo: /var/www/html/jobby/mongo-1.6.8/types/id.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/id.c -o types/id.lo 
types/int32.lo: /var/www/html/jobby/mongo-1.6.8/types/int32.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/int32.c -o types/int32.lo 
types/int64.lo: /var/www/html/jobby/mongo-1.6.8/types/int64.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/int64.c -o types/int64.lo 
types/regex.lo: /var/www/html/jobby/mongo-1.6.8/types/regex.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/regex.c -o types/regex.lo 
types/timestamp.lo: /var/www/html/jobby/mongo-1.6.8/types/timestamp.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/types/timestamp.c -o types/timestamp.lo 
util/log.lo: /var/www/html/jobby/mongo-1.6.8/util/log.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/util/log.c -o util/log.lo 
util/pool.lo: /var/www/html/jobby/mongo-1.6.8/util/pool.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/util/pool.c -o util/pool.lo 
mcon/bson_helpers.lo: /var/www/html/jobby/mongo-1.6.8/mcon/bson_helpers.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/bson_helpers.c -o mcon/bson_helpers.lo 
mcon/collection.lo: /var/www/html/jobby/mongo-1.6.8/mcon/collection.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/collection.c -o mcon/collection.lo 
mcon/connections.lo: /var/www/html/jobby/mongo-1.6.8/mcon/connections.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/connections.c -o mcon/connections.lo 
mcon/manager.lo: /var/www/html/jobby/mongo-1.6.8/mcon/manager.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/manager.c -o mcon/manager.lo 
mcon/mini_bson.lo: /var/www/html/jobby/mongo-1.6.8/mcon/mini_bson.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/mini_bson.c -o mcon/mini_bson.lo 
mcon/parse.lo: /var/www/html/jobby/mongo-1.6.8/mcon/parse.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/parse.c -o mcon/parse.lo 
mcon/read_preference.lo: /var/www/html/jobby/mongo-1.6.8/mcon/read_preference.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/read_preference.c -o mcon/read_preference.lo 
mcon/str.lo: /var/www/html/jobby/mongo-1.6.8/mcon/str.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/str.c -o mcon/str.lo 
mcon/utils.lo: /var/www/html/jobby/mongo-1.6.8/mcon/utils.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/utils.c -o mcon/utils.lo 
mcon/contrib/md5.lo: /var/www/html/jobby/mongo-1.6.8/mcon/contrib/md5.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/contrib/md5.c -o mcon/contrib/md5.lo 
mcon/contrib/strndup.lo: /var/www/html/jobby/mongo-1.6.8/mcon/contrib/strndup.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/mcon/contrib/strndup.c -o mcon/contrib/strndup.lo 
api/wire_version.lo: /var/www/html/jobby/mongo-1.6.8/api/wire_version.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/api/wire_version.c -o api/wire_version.lo 
api/write.lo: /var/www/html/jobby/mongo-1.6.8/api/write.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/api/write.c -o api/write.lo 
api/batch.lo: /var/www/html/jobby/mongo-1.6.8/api/batch.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/api/batch.c -o api/batch.lo 
batch/write.lo: /var/www/html/jobby/mongo-1.6.8/batch/write.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/batch/write.c -o batch/write.lo 
batch/insert.lo: /var/www/html/jobby/mongo-1.6.8/batch/insert.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/batch/insert.c -o batch/insert.lo 
batch/update.lo: /var/www/html/jobby/mongo-1.6.8/batch/update.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/batch/update.c -o batch/update.lo 
batch/delete.lo: /var/www/html/jobby/mongo-1.6.8/batch/delete.c
	$(LIBTOOL) --mode=compile $(CC) -I./util -I. -I/var/www/html/jobby/mongo-1.6.8 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /var/www/html/jobby/mongo-1.6.8/batch/delete.c -o batch/delete.lo 
$(phplibdir)/mongo.la: ./mongo.la
	$(LIBTOOL) --mode=install cp ./mongo.la $(phplibdir)

./mongo.la: $(shared_objects_mongo) $(MONGO_SHARED_DEPENDENCIES)
	$(LIBTOOL) --mode=link $(CC) $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) -o $@ -export-dynamic -avoid-version -prefer-pic -module -rpath $(phplibdir) $(EXTRA_LDFLAGS) $(shared_objects_mongo) $(MONGO_SHARED_LIBADD)

