#!/bin/bash
set -euo pipefail
IFS=$'\n\t'

# Paths relative to root.

# Database.
mysqladmin create wordpress_app -u root -p "$WP_TESTS_DB_PASS"
