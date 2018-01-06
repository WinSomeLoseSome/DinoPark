

CREATE TABLE manager(
  ID INT NOT NULL,
  name VARCHAR(45),
  moneyMade INT,
  satisfaction INT,
  PRIMARY KEY (ID));

INSERT INTO manager(ID, name, moneyMade, satisfaction) VALUES (1, 'Sam Clark',   1299, 5);
INSERT INTO manager(ID, name, moneyMade, satisfaction) VALUES (2, 'Alex Mascott', 600, 7);
INSERT INTO manager(ID, name, moneyMade, satisfaction) VALUES (3, 'John Hammond', 500, 8);

CREATE TABLE trainer(
  ID INT NOT NULL,
  name VARCHAR(45),
  age INT,
  dinoType VARCHAR(45),
  pay INT,
  moneyMade INT,
  managerID INT,
  PRIMARY KEY (ID),
  FOREIGN KEY (managerID) REFERENCES manager
  ON DELETE CASCADE);

INSERT INTO trainer(ID, name, age, dinoType, pay, moneyMade, managerID) VALUES (1, 'Ian Malcolm',   35, 'T.Rex',        150, 2400, 1);
INSERT INTO trainer(ID, name, age, dinoType, pay, moneyMade, managerID) VALUES (2, 'Chris Pratt',   40, 'Velociraptor', 200, 1800, 2);
INSERT INTO trainer(ID, name, age, dinoType, pay, moneyMade, managerID) VALUES (3, 'Ellie Sattler', 32, 'Stegosaurus',  120, 1200, 3);

CREATE TABLE security(
  ID INT NOT NULL,
  name VARCHAR(45) NULL,
  pay INT NULL,
  age INT NULL,
  moneyMade INT,
  dinosTerminated INT NULL,
  managerID INT NOT NULL,
  PRIMARY KEY (ID),
  FOREIGN KEY (managerID) REFERENCES manager
  ON DELETE CASCADE);

/*pay = 20*dinosTerminated */
INSERT INTO security(ID, name, pay, age, moneyMade, dinosTerminated, managerID) VALUES (1, 'John Cates',     100, 25,  2200,   5, 2);
INSERT INTO security(ID, name, pay, age, moneyMade, dinosTerminated, managerID) VALUES (2, 'Brady Ingenmey', 200, 28,   400,  10, 1);
INSERT INTO security(ID, name, pay, age, moneyMade, dinosTerminated, managerID) VALUES (3, 'Paul Blart',    1000, 43, 12000,  50, 3);


CREATE TABLE customer(
  ID INT NOT NULL,
  name VARCHAR(45) NULL,
  age INT NULL,
  satisfaction INT NULL,
  managerID INT NULL,
  PRIMARY KEY (ID),
  FOREIGN KEY (managerID) REFERENCES manager
  ON DELETE CASCADE);

INSERT INTO customer(ID, name, age, satisfaction, managerID) values(1, 'Alan Grant',       43,  4, 1);
INSERT INTO customer(ID, name, age, satisfaction, managerID) values(2, 'Benton Robertson', 22, 10, 2);
INSERT INTO customer(ID, name, age, satisfaction, managerID) values(3, 'Tom Roche',        43,  6, 3);



CREATE TABLE items(
  ID INT NOT NULL,
  name VARCHAR(45) NULL,
  effect INT NULL,
  PRIMARY KEY (ID));

INSERT INTO items(ID, name, effect) VALUES(1, 'Medicine',     5);
INSERT INTO items(ID, name, effect) VALUES(2, 'Toys',         3);
INSERT INTO items(ID, name, effect) VALUES(3, 'Shock Collar', 1);

CREATE TABLE food(
  ID INT NOT NULL,
  name VARCHAR(45),
  type VARCHAR(45),
  cost INT,
  health INT,
  PRIMARY KEY (ID));

INSERT INTO food(ID, name, type, cost, health) values(1, 'Leaves', 'Vegetable',  500, 9);
INSERT INTO food(ID, name, type, cost, health) values(2, 'Steak',       'Meat', 1000, 6);
INSERT INTO food(ID, name, type, cost, health) values(3, 'Pork',        'Meat',  800, 5);
INSERT INTO food(ID, name, type, cost, health) values(4, 'Bread',      'Grain',  100, 6);
INSERT INTO food(ID, name, type, cost, health) values(5, 'Apples',     'Fruit',   50, 9);
INSERT INTO food(ID, name, type, cost, health) values(6, 'Yogurt',     'Dairy',  200, 7);



CREATE TABLE dinosaur(
  ID INT NOT NULL,
  name VARCHAR(45) NULL,
  food INT,
  health INT NULL,
  happiness INT NULL,
  type VARCHAR(45) NULL,
  PRIMARY KEY (ID),
  FOREIGN KEY (food) REFERENCES food
  ON DELETE CASCADE);

INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(1, 'Buddy',       2,  6,  8, 'T.Rex');
INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(2, 'Leonard',     3,  3,  9, 'Velociraptor');
INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(3, 'Sarah',       5,  3,  3, 'Triceratops');
INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(4, 'Steggy',      4,  7, 10, 'Stegosaurus');
INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(5, 'Little Foot', 1, 10,  5, 'Brachiosaurus');
INSERT INTO dinosaur(ID, name, food, health, happiness, type) values(6, 'Buggati',     3,  5, 25, 'T.Rex');


CREATE TABLE gives(
  timestamp VARCHAR(45) NOT NULL,
  Item_ID INT NULL,
  Trainer_ID INT NULL,
  Dinosaur_ID INT NULL,
  amount INT NULL,
  PRIMARY KEY (timestamp),
  FOREIGN KEY (Item_ID) REFERENCES items
  ON DELETE CASCADE,
  FOREIGN KEY (Trainer_ID) REFERENCES trainer
  ON DELETE CASCADE,
  FOREIGN KEY (Dinosaur_ID) REFERENCES dinosaur
  ON DELETE CASCADE);

INSERT INTO gives(timestamp, Item_ID, Trainer_ID, Dinosaur_ID, amount) values('25/01/2017', 1, 1, 1, 2);
INSERT INTO gives(timestamp, Item_ID, Trainer_ID, Dinosaur_ID, amount) values('22/05/2017', 2, 2, 2, 5);
INSERT INTO gives(timestamp, Item_ID, Trainer_ID, Dinosaur_ID, amount) values('05/10/2017', 3, 3, 3, 1);

/*
Below are the SQL commands in our source code:

Manager hires a new Trainer. INSERT Trainer into trainer table. (Deliverable 2)

INSERT INTO trainer 
VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, 0, :bind6)

The Security terminates a dinosaur. DELETE a dinosaur from the dinosaur table and UPDATE #dinosTerminated 
for the security member who did it. (Deliverable 3, 7)

UPDATE security 
SET dinosTerminated=dinosTerminated+1 
WHERE ID=:bind1

A Trainer gives a dinosaur an item. UPDATE the dinosaurs happiness by a certain amount depending 
on the item’s effect. (Deliverable 4 and 5)

INSERT INTO gives(timestamp,Item_ID,Trainer_ID,Dinosaur_ID,amount) 
VALUES(to_char(current_timestamp, 'YYYY-MM-DD HH24:MI'),:bind2,:bind1,:bind3,:bind4

A trainer feeds the dinosaur a food. UPDATE the dinosaurs health by a certain amount 
based on food health. (Deliverable 6)

UPDATE dinosaur 
SET dinosaur.health = (SELECT food.health 
FROM food
WHERE food.ID = :bind2)
WHERE dinosaur.ID=:bind3

Manager fires a trainer. DELETE the trainer from the Trainers table. (Deliverable 9)

DELETE FROM trainer 
WHERE ID=:bind1

Manager fires a security guard. DELETE security guard from Security table.

DELETE FROM security 
WHERE ID=:bind1

{{{Customer pays to watch a specific type of dinosaur (WHERE). UPDATE 
Customers satisfaction level, UPDATE Managers money made and satisfaction level, 
UPDATE all dinosaurs of that type’s happiness. (Deliverable 7)

UPDATE customer
SET customer.satisfaction = customer.satisfaction + 10
WHERE customer.id=:cid
UPDATE manager
SET manager.satisfaction = manager.satisfaction + 5,
    manager.moneyMade = manager.moneyMade + 500
WHERE manager.ID = ( SELECT customer.managerID FROM customer WHERE customer.id=:cid)

Manager pays a trainer given their pay. UPDATE trainer moneymade and UPDATE 
manager moneymade and satisfaction level.(Deliverable 10)

UPDATE trainer
SET trainer.moneyMade = trainer.moneyMade + trainer.pay
WHERE trainer.id = :trainerID
UPDATE manager
SET manager.satisfaction = manager.satisfaction - 5, manager.moneyMade = manager.moneyMade - 
(SELECT trainer.pay FROM trainer WHERE trainer.id = :trainerID)
WHERE manager.ID= (SELECT trainer.managerID FROM trainer WHERE trainer.id = :trainerID)

Manager pays a security guard. UPDATE security moneymade UPDATE manager 
moneymade and satisfaction level.

UPDATE security
SET security.moneyMade = security.moneyMade + security.pay
WHERE security.id = :securityID
UPDATE manager
SET manager.satisfaction = manager.satisfaction - 5, 
manager.moneyMade = manager.moneyMade - 
(SELECT security.pay FROM security WHERE security.id = :securityID)
WHERE manager.ID = (SELECT security.managerID FROM security 
WHERE security.id = :securityID)

Mangere hires a new Security guard. INSERT security guard into 
Security table. (Deliverable 11)

INSERT INTO security VALUES (:id, :name, :pay, :age, 0, 0, :managerID)

Manager fires all trainers who made too much money. DELETE all 
trainers WHERE moneymade > 100.

DELETE FROM trainer
WHERE trainer.pay > :maxPay

Manager knows how many dinos of certain type. GROUP 
BY dinosaur type.(Deliverable 8).

select * from manager where manager.satisfaction > " . 
$_COOKIE['printSatisfaction




*/
