CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id`      CHAR(40) NOT NULL,
  `session_data`    TEXT NOT NULL,
  `session_expire`  BIGINT(20) NOT NULL,
  UNIQUE KEY `session_id` (`session_id`)
);
