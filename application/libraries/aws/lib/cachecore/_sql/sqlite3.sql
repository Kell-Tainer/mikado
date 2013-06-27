<<<<<<< HEAD
CREATE TABLE cache (id TEXT, expires NUMERIC, data BLOB);
=======
CREATE TABLE cache (id TEXT, expires NUMERIC, data BLOB);
>>>>>>> branch 'cdn' of https://github.com/sjlu/CodeIgniter-Bootstrap.git
CREATE UNIQUE INDEX idx ON cache(id ASC);
