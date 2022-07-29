create table search(
    id int not null auto_increment,
    q varchar(255) not null,
    session_id varchar(255) not null,
    primary key (id)
);
create table products(
    id int not null auto_increment,
    title varchar(255) not null,
    categories varchar(255)not null,
    primary key(id)
);
insert into products (title,categories)values('ipad 512gb gold','tablet,apple,tableta,ipad'),('shampoo head & shoulders 500 mls','shampoo, hair, cuidado personal, higiene'),('funkp pop capitan america','funko, pop, marvel, capitan, america');