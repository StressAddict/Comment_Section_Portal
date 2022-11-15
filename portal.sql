CREATE TABLE `comments`(
    `ID` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `PageID` INT(11) NOT NULL,
    `ParentID` INT(11) NOT NULL DEFAULT '-1',
    `UserName` VARCHAR(255) NOT NULL,
    `Comment` TEXT NOT NULL,
    `Date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO `comments` (`ID`, `PageID`, `ParentID`, `UserName`, `Comment`, `Date`) VALUES (NULL, '', '-1', 'General Zoots', 'testing ', current_timestamp()), (NULL, '', '-1', 'Gubz', 'Gabriel is the best fortnite player', current_timestamp()) (NULL, '', '-1', 'Jason', 'my brother is a dickhead', current_timestamp()), (NULL, '', '-1', 'Red name', '???', current_timestamp());