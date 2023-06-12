ALTER TABLE planeten MODIFY COLUMN naam varchar(255) NOT NULL;
ALTER TABLE planeten MODIFY COLUMN diameter int NOT NULL;
ALTER TABLE planeten MODIFY COLUMN afstand int NOT NULL;
ALTER TABLE planeten MODIFY COLUMN massa int NOT NULL;

ALTER TABLE planeten ADD COLUMN bezoek_datum date;

INSERT INTO planeten (naam, diameter, afstand, massa, aantal_manen, bezoek_datum)
VALUES ('Zon', 1392000, 0, 332946, 0, NULL),
('Mercurius', 4880, 57910000, 0, 0, NULL),
('Venus', 12104, 108208930, 1, 0, NULL),
('Aarde', 12756, 149597870, 1, 1, NULL),
('Mars', 6794, 227936640, 0, 2, NULL),
('Maan', 3476, 149597870, 0.0123, 0, '1969-07-20');