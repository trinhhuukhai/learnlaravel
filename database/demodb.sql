create Table 'category'(
    'id' int(11) not null,
    'name' varchar(100)  NOT NULL,
    'status' tinyint(4) NOT NULL DEFAULT 1,
    'created_at' datetime DEFAULT null,
)
create table product(
    id int(11) not null,
    name varchar(150) NOT null,
    image varchar(200)not null,
    price int(11) not null,
    category_id int(11) not null
)
Alter table category
    add primary key('id')

Alter table product
    add primary key('id'),
    add key 'FK_category_id' ('category_id')
