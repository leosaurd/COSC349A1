DROP TABLE IF EXISTS login;

CREATE TABLE login(
    user varchar(25) NOT NULL,
    password varchar(25) NOT NULL,
    PRIMARY KEY(user)
);

INSERT INTO login VALUES('admin', 'password');

DROP TABLE IF EXISTS data;

CREATE TABLE data(
    user_id MEDIUMINT NOT NULL AUTO_INCREMENT,
    adata varchar(25) NOT NULL,
    bdata varchar(25) NOT NULL,
    cdata DECIMAL(14, 0) NOT NULL,
    PRIMARY KEY(user_id)
);

/*DROP TABLE IF EXISTS uploads;

CREATE TABLE uploads(
    file_id MEDIUMINT NOT NULL AUTO_INCREMENT,
    desc varchar(150) NOT NULL,
    data LONGBLOB,
    filename varchar(25),
    filesize varchar(50),
    filetype varchar(50),
    PRIMARY KEY(file_id)
);*/

/*INSERT INTO data(adata, dbdata) VALUES('test', 10.10);*/