CREATE TABLE morena.Bookings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    clientname VARCHAR(46) NOT NULL,
    email VARCHAR(100),
    clientnumber INT(11) NOT NULL,
    serviceselected VARCHAR(80) NOT NULL,
    booking_time TIMESTAMP,
    comment VARCHAR(1000)
);