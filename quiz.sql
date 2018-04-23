-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:28 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Question_id` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer1` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  `Answer4` varchar(255) NOT NULL,
  `Correct` varchar(255) NOT NULL,
  `Subject_id` int(11) NOT NULL,
  `Subject` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Question_id`, `Question`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `Correct`, `Subject_id`, `Subject`) VALUES
(8, 'What is an infinite loop? ', 'A loop that functions infinitely well', 'A loop that runs forever', 'A loop that never starts', 'A loop that will never function', 'A loop that runs forever', 1, 'Java'),
(15, 'Which of the following is/are legal method declarations?  protected abstract void m1(); 1.	static final void m1(){} 2.	synchronized public final void m1() {} 3.	private native void m1();', '1 and 3', '2 and 4', '1 only', 'All of them are legal declarations.', 'All of them are legal declarations.', 1, 'Java'),
(13, 'What is the most restrictive access modifier that will allow members of one class to have access to members of another class in the same package?', 'default access', 'abstract', 'public', 'protected', 'default access', 1, 'Java'),
(10, 'Which is a reserved word in the Java programming language?', 'method', 'subclasses', 'native', 'reference', 'native', 1, 'Java'),
(11, 'Which is a valid keyword in java?', 'unsigned', 'Float', 'string', 'interface', 'interface', 1, 'Java'),
(14, 'Given a method in a protected class, what access modifier do you use to restrict access to that method to only the other members of the same class?Given a method in a protected class, what access modifier do you use to restrict access to that method to on', 'protected', 'private', 'static', 'final', 'private', 1, 'Java'),
(16, 'All of them are legal declarations.All of them are legal declarations.', 'It can extend exactly one class and implement exactly one interface.', 'It can extend exactly one class or implement exactly one interface.', 'It can implement multiple interfaces regardless of whether it also extends a class.', 'It can extend exactly one class and can implement multiple interfaces.', 'It can extend exactly one class and can implement multiple interfaces.', 1, 'Java'),
(17, 'Which is true about a method-local inner class?', 'It must be marked final.It must be marked final.', 'It can be marked abstract.', 'It can be marked public.', 'All of them are legal statements.', 'It can be marked abstract.', 1, 'Java'),
(18, 'What allows the programmer to destroy an object x?', 'x.delete()', 'x.finalize()', 'Runtime.getRuntime().gc()', 'Only the garbage collection system can destroy an object.', 'Only the garbage collection system can destroy an object.', 1, 'Java'),
(19, 'What is inheritance?', 'It is the process where one object acquires the properties of another.', 'inheritance is the ability of an object to take on many forms.', 'inheritance is a technique to define different methods of same type.', 'None of the above.', 'It is the process where one object acquires the properties of another.', 1, 'Java'),
(20, 'When static binding occurs?', 'Static binding occurs during load time.', 'Static binding occurs during Compile time.', 'Static binding occurs during runtime.', ' None of the above.', 'Static binding occurs during Compile time.', 1, 'Java'),
(21, 'What is a marker interface?', 'marker interface is an interface with single method, marker().', 'marker interface is an interface with single method, mark().marker interface is an interface with single method, mark().', 'marker interface is an interface with no method.', 'None of the above.None of the above.', 'marker interface is an interface with no method.', 1, 'Java'),
(22, 'What is Encapsulation?', 'Encapsulation is the technique of making the fields in a class private and providing access to the fields via public methods.', 'Encapsulation is a technique to define different methods of same type.', 'Encapsulation is the ability of an object to take on many forms.', 'None of the above.', 'Encapsulation is the technique of making the fields in a class private and providing access to the fields via public methods.', 1, 'Java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
