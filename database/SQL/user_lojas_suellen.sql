CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
CREATE EXTENSION IF NOT EXISTS "pgcrypto";

-- // Tabela application_user
CREATE TABLE IF NOT EXISTS user_lojas_suellen(
    uuid uuid DEFAULT uuid_generate_v4(),
    username VARCHAR NOT NULL,
    password VARCHAR NOT NULL,
    PRIMARY KEY (uuid)
);

INSERT INTO user_lojas_suellen (username, password) VALUES ('suellen', crypt('admin', 'my_salt'));
