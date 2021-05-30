#
# Add SQL definition of database tables
#
CREATE TABLE tt_content
(
    layout varchar(255) DEFAULT '' NOT NULL,
    tnt_hideon_device tinyint(4) DEFAULT '0' NOT NULL
);
