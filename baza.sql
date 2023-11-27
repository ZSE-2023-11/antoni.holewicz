CREATE TABLE `users` (
  id int primary key auto_increment,
  username varchar(25) not null unique,
  password varchar(50) not null
)
