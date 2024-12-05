# config.rb

# Define your variables
$MEMORY_SIZE = "2048"
$CPU_COUNT = 2

$TIMEZONE = "Europe/Paris"

$HTTP_PORT_GUEST   = nil                        # If nil, default forwarded port to 8080
$HTTP_PORT_HOST    = nil                        # If nil, default forwarded port to 8080

$PHP_VERSION    = 8.3                           # 5.6, 7.4, 8.0, 8.1, 8.2 or 8.3 accepted values
$PHP_MODULES    = ""                            # space separated module (ex: "ldap session")
$PHP_WITH_OCI8  = true                          # Install OCI8 module or not (accepted values true or false)

$WITH_MARIADB         = true
$MARIADB_PORT_HOST    = nil                    # If nil, default forwarded port to 3306
$MARIADB_DB_DATABASE  = "Patrimoine"
$MARIADB_DB_USERNAME  = "user"
$MARIADB_DB_PASSWORD  = "root"

$WITH_POSTGRESQL            = false
$POSTGRESQL_PORT_HOST       = nil               # If nil, default forwarded port to 5432
$POSTGRESQL_DB_DATABASE     = ""
$POSTGRESQL_DB_USERNAME     = ""
$POSTGRESQL_DB_PASSWORD     = ""

$EXTRAS_PKG   = ""
