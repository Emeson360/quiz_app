-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eass_cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', '$2y$10$QskwjHeku7wS3ql6/vj1VeCJ.jh7gdh6.gOkRnmwYStlr5nzzkUOK');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `date`) VALUES
(4, 'JSS1A', '2024-05-21 19:26:03'),
(5, 'JSS1B', '2024-05-21 19:26:13'),
(6, 'JSS1C', '2024-05-21 19:26:17'),
(7, 'JSS1D', '2024-05-21 19:26:21'),
(8, 'JSS1E', '2024-05-21 19:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(255) NOT NULL,
  `term` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `instruction` text NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q1_opt_a` varchar(255) NOT NULL,
  `q1_opt_b` varchar(255) NOT NULL,
  `q1_opt_c` varchar(255) NOT NULL,
  `q1_opt_d` varchar(255) NOT NULL,
  `q1_answer` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q2_opt_a` varchar(255) NOT NULL,
  `q2_opt_b` varchar(255) NOT NULL,
  `q2_opt_c` varchar(255) NOT NULL,
  `q2_opt_d` varchar(255) NOT NULL,
  `q2_answer` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q3_opt_a` varchar(255) NOT NULL,
  `q3_opt_b` varchar(255) NOT NULL,
  `q3_opt_c` varchar(255) NOT NULL,
  `q3_opt_d` varchar(255) NOT NULL,
  `q3_answer` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `q4_opt_a` varchar(255) NOT NULL,
  `q4_opt_b` varchar(255) NOT NULL,
  `q4_opt_c` varchar(255) NOT NULL,
  `q4_opt_d` varchar(255) NOT NULL,
  `q4_answer` varchar(255) NOT NULL,
  `q5` varchar(255) NOT NULL,
  `q5_opt_a` varchar(255) NOT NULL,
  `q5_opt_b` varchar(255) NOT NULL,
  `q5_opt_c` varchar(255) NOT NULL,
  `q5_opt_d` varchar(255) NOT NULL,
  `q5_answer` varchar(255) NOT NULL,
  `q6` varchar(255) NOT NULL,
  `q6_opt_a` varchar(255) NOT NULL,
  `q6_opt_b` varchar(255) NOT NULL,
  `q6_opt_c` varchar(255) NOT NULL,
  `q6_opt_d` varchar(255) NOT NULL,
  `q6_answer` varchar(255) NOT NULL,
  `q7` varchar(255) NOT NULL,
  `q7_opt_a` varchar(255) NOT NULL,
  `q7_opt_b` varchar(255) NOT NULL,
  `q7_opt_c` varchar(255) NOT NULL,
  `q7_opt_d` varchar(255) NOT NULL,
  `q7_answer` varchar(255) NOT NULL,
  `q8` varchar(255) NOT NULL,
  `q8_opt_a` varchar(255) NOT NULL,
  `q8_opt_b` varchar(255) NOT NULL,
  `q8_opt_c` varchar(255) NOT NULL,
  `q8_opt_d` varchar(255) NOT NULL,
  `q8_answer` varchar(255) NOT NULL,
  `q9` varchar(255) NOT NULL,
  `q9_opt_a` varchar(255) NOT NULL,
  `q9_opt_b` varchar(255) NOT NULL,
  `q9_opt_c` varchar(255) NOT NULL,
  `q9_opt_d` varchar(255) NOT NULL,
  `q9_answer` varchar(255) NOT NULL,
  `q10` varchar(255) NOT NULL,
  `q10_opt_a` varchar(255) NOT NULL,
  `q10_opt_b` varchar(255) NOT NULL,
  `q10_opt_c` varchar(255) NOT NULL,
  `q10_opt_d` varchar(255) NOT NULL,
  `q10_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `term`, `session`, `type`, `class`, `subject`, `instruction`, `q1`, `q1_opt_a`, `q1_opt_b`, `q1_opt_c`, `q1_opt_d`, `q1_answer`, `q2`, `q2_opt_a`, `q2_opt_b`, `q2_opt_c`, `q2_opt_d`, `q2_answer`, `q3`, `q3_opt_a`, `q3_opt_b`, `q3_opt_c`, `q3_opt_d`, `q3_answer`, `q4`, `q4_opt_a`, `q4_opt_b`, `q4_opt_c`, `q4_opt_d`, `q4_answer`, `q5`, `q5_opt_a`, `q5_opt_b`, `q5_opt_c`, `q5_opt_d`, `q5_answer`, `q6`, `q6_opt_a`, `q6_opt_b`, `q6_opt_c`, `q6_opt_d`, `q6_answer`, `q7`, `q7_opt_a`, `q7_opt_b`, `q7_opt_c`, `q7_opt_d`, `q7_answer`, `q8`, `q8_opt_a`, `q8_opt_b`, `q8_opt_c`, `q8_opt_d`, `q8_answer`, `q9`, `q9_opt_a`, `q9_opt_b`, `q9_opt_c`, `q9_opt_d`, `q9_answer`, `q10`, `q10_opt_a`, `q10_opt_b`, `q10_opt_c`, `q10_opt_d`, `q10_answer`) VALUES
(1, 'second_term', '', 'test', 'JSS1', 'English Language', 'Underline the adverbs in the following sentences', 'The choir sang beautifully in the church', 'sang', 'church', 'beautifully', 'choir', 'beautifully', 'The team played well', 'well', 'the', 'played', 'team', 'well', 'The woman quickly sent the boy away', 'boy', 'quickly', 'sent', 'the', 'quickly', 'The students answered the question correctly', 'correctly', 'question', 'answered', 'students', 'correctly', 'The king walked majestically', 'the', 'king', 'walked', 'majestically', 'majestically', 'The sound that glides from one sound to another is called __________________', 'vowel', 'pure vowel', 'consonant', 'diphthong', 'diphthong', 'A term used in grammar to indicate the time of the action or event is known as ________________', 'tense', 'verb', 'simple present', 'adjective', 'tense', 'She _______________ everyday.', 'eat', 'ate', 'eaten ', 'eats', 'eats', 'We ______________ every morning', 'ate', 'eats', 'eaten', 'eat', 'eat', 'He ________________ to church last sunday', 'goes', 'come', 'go', 'went', 'went'),
(2, 'second_term', '', 'test', 'JSS1', 'Civic Education', '', 'Which of the following is not an example of a self reliant business', 'Civil service', 'Candle making', 'Shoe making', 'Soap making', 'Civil service', 'Talent are rightly described as ______________', 'Magic', 'Physical challenge', 'Natural abilities', 'none of the above', 'Natural abilities', 'A person born in a country where his or her parents are citizens automatically becomes a _______________', 'citizen', 'foreigner', 'migrant', 'guest', 'citizen', 'Which of the following is not a type of citizenship', 'citizenship by birth', 'citizenship by force', 'citizenship by registration', 'citizenship by naturalisation', 'citizenship by force', 'In Nigeria, a citizen has _________________', 'limited right to vote', 'full right to vote', 'right to buy votes', 'right to engage in violence', 'full right to vote', 'A kind of value cherished by an individual is distinguished as ______________', 'moral values', 'society values', 'personal values', 'aesthesic values', 'personal values', 'Values in a society promotes the following except _________________', 'peace', 'hatred', 'cooperation', 'love', 'hatred', 'When we positively cooperate and live in peace with one another, we promote ______________', 'good values', 'fear', 'bad attitude', 'jealous', 'good values', 'Honesty means ________________', 'being honest', 'being dishonest', 'being educated', 'being married', 'being honest', 'Honesty often attract _____________', 'punishment', 'disrespect', 'respect', 'dishonesty', 'respect'),
(3, 'second_term', '', 'test', 'JSS1', 'Basic Technology', '', 'One of the following is a process of processing the material wood', 'peeling', 'timber growth', 'sew', 'forest', 'timber growth', 'Timbers are trees in the _________________', 'church', 'school', 'forest', 'market', 'forest', 'Wood suitable for engineering work is called ____________________', 'word', 'suitable', 'timber', 'work', 'timber', 'One of the instrument used for timber felling is _______________', 'chain', 'belt', 'chain saw', 'hoe', 'chain saw', 'The formula for calculating the percentage(%) of the water or moisture content in a wood or timber is given as _______________', '(wet - dry)/dry * 100/1', '(wet + dry)/dry * 100/1', '(wet / dry)/dry * 100/1', '(dry - wet)/dry * 100/1', '(wet - dry)/dry * 100/1', 'The feature that reduces the quantity or marketable value of a timber is known as _______________', 'growth', 'conversion', 'defect', 'preservation', 'defect', 'The process of applying chemical on wood or timber to prevent the attack of insect is known as ______________', 'preservation', 'seasoning', 'defect', 'attack', 'preservation', 'Determine the different between 6kg and 50kg ', '1kg', '2g', '3kg', '10kg', '10kg', 'Natural seasoning is also known as ______________', 'nature', 'air seasoning', 'kiln seasoning', 'natural seasoning', 'air seasoning', 'One of these is a method applying timber preservative', 'spraying', 'cutting', 'washing', 'watering', 'spraying'),
(4, 'second_term', '', 'test', 'JSS1', 'CCA', '', 'Mat and raffia works are referred to as _____________', 'crafts', 'painting', 'ceramics', 'pencil', 'crafts', 'Raffia and cotton are fibres most widely used for _______________ in Nigeria', 'dyeing', 'weaving', 'painting', 'jumping', 'weaving', 'The following are needed for cane weaving EXCEPT __________________', 'cane stick', 'paper', 'cutting knife', 'nail', 'paper', 'The mixing of dye chemical in tie &amp; dye process is referred to as ___________________', 'mixing', 'vatting', 'dye stuff', 'salt', 'vatting', 'An instrument/tool used in spreading ink on a silk screen mesh is __________', 'squeege', 'lino', 'mesh', 'maquette', 'squeege', 'In batik design, the materials used as a resist is ________________', 'dye', 'wax', 'paint', 'rope', 'wax', 'A pounded wet paper mixed with starch is _________________', 'round', 'objects', 'paper mache', 'starch', 'paper mache', 'Two main materials for paper mache are _________________', 'starch and paper', 'starch and crum', 'starch and leave', 'starch and plate', 'starch and paper', 'Dyed cloth can be used in making ___________________', 'paint', 'chain', 'dress', 'teaching', 'dress', 'paper mache is done by mixing pounded paper with ____________', 'starch', 'evostic', 'clay', 'paint', 'starch'),
(5, 'second_term', '', 'test', 'JSS2', 'Basic Science', '', 'Anything released on air that makes breathing difficult is known as ________________', 'Iodine', 'carbon (iv) oxide', 'oxygen', 'air pollutant', 'air pollutant', 'Which of these substances is a solid air pollutant _________________', 'rock', 'faeces', 'wood', 'cement particles', 'cement particles', 'Bush burning is a way of practicing ______________', 'afforestation', 'irrigation', 'social amenities', 'air pollution', 'air pollution', '_______________ is one of the useful soil living organisms in the soil', 'ant', 'earthworm', 'scorpion', 'snake', 'earthworm', 'These are examples of soil pollutant except _______________', 'oil spillage', 'nylon', 'scraps', 'seed planting', 'seed planting', '_____________ is one of the control measures against soil pollution', 'good sanitation practice', 'bush burning', 'deforestation', 'practicing oil spillage', 'good sanitation practice', 'The short form of Information and Communication Technology is', 'ITC', 'CIT', 'ICT', 'TCI', 'ICT', 'The name of the enzyme which act in the mouth is _____________', 'ptyalin', 'pepsin', 'rennin', 'lipase', 'ptyalin', 'Digestion of food ends where', 'mouth', 'small intestine', 'large intestine', 'gall bladder', 'small intestine', 'Bile salt helps to break down _______________', 'starch', 'protein', 'fats and oil', 'peptone', 'fats and oil'),
(6, 'second_term', '', 'test', 'JSS2', 'Business Studies', '', 'An insurance policy that deals with breaking stealing from a house or shop is known as _________________', 'marine', 'burglary', 'fire insurance', 'vehicle insurance', 'burglary', 'The insurance policy which covers goods by sea is known as ____________ insurance', 'marine', 'vehicle', 'burglary', 'fire', 'marine', 'The seller records his daily cash sales in a book called ____________', 'price list', 'delivery note', 'cash account', 'cash register', 'cash register', 'One of the following is an example of large retailer _______________', 'stall holder', 'kiosk owner', 'supermarket', 'hawker', 'supermarket', 'A trader who buy goods in small quantities from wholesaler is called _____________', 'producer', 'retailer', 'wholesaler', 'consumer', 'retailer', 'One of the following is not a type of bank ___________________', 'commercial', 'Union bank', 'mortgage bank', 'agricultural bank', 'Union bank', 'The creation of goods and services for the satisfaction of human wants is known as ______________', 'produce', 'market', 'production', 'trade', 'production', 'The two types of cheque are _________________', 'open cheque and cover cheque', 'cross cheque and close cheque', 'bank cheque and open cheque', 'cross cheque and open cheque', 'cross cheque and open cheque', 'Which of the following is not among the departments in an organisation?', 'trading department', 'sales department', 'account department', 'personnel department', 'trading department', 'Farming is an example of ________________ production', 'extractive', 'constructive', 'service', 'commercial', 'extractive'),
(7, 'second_term', '', 'test', 'JSS2', 'Computer Studies', '', 'The numeral system of representing numbers of a given set using digits in a consistent manner is known as ________________', 'numeral system', 'basic numbering', 'number values', 'number cases', 'numeral system', 'The hexadecimal system represents numbers using ________________ digits', '10', '2', '8', '16', '16', 'Base 2 is also referred to as _____________________', 'binary', 'decimal', 'octal', 'denary', 'binary', 'Convert 42 to base 2', '10001', '111012', '101010', '100100', '101010', 'The smallest unit of storage in computer is called __________________', 'byte', 'character', 'bits', 'word', 'bits', '1 kilobyte is equivalent to _______________________ bytes', '1000', '1020', '1340', '1024', '1024', 'Programs written in _______________ language are executed without interpretation', 'Machine', 'Assembly', 'C++', 'Java', 'Machine', 'The representation of solutions to a problem or job steps is _____________', 'steps', 'procedures', 'algorithm', 'program', 'algorithm', 'Which of these is not a high level language', 'C++', 'Java', 'Igbo', 'Python', 'Igbo', 'One nibble is equivalent to _______________ byte', '1024', '1/2', '1/3', '8', '1/2'),
(8, 'second_term', '', 'test', 'JSS1', 'French Language', '', 'Le frere de mon pere est mon __________', 'oncle', 'grand-pere', 'consin', 'neven', 'oncle', 'Les animant sanvages se tronvent dans la ________________', 'piscine', 'foret', 'maison', 'a l ecole', 'foret', 'The weather is very cold. We say _________________________', 'il fait tres chand', 'il plent', 'il fait tres froid', 'il neige', 'il fait tres froid', '15 + 30 = _________________', 'quarante', 'quarante-cinq', 'cin quante-cinq', 'quatorze-cinq', 'quarante-cinq', 'La soeur de ma mere est ma _______________', 'tante', 'niece', 'cousine', 'amie', 'tante', 'Le huitieme mois de l&#039; annee c&#039;est _______________', 'janvier', 'avril', 'aout', 'mars', 'aout', 'Le mois de Novembre a ________________ jours', 'trente', 'vingt', 'vingt-huit', 'trente et un', 'trente', 'Un chat habite dans la ______________', 'a l&#039;ecole', 'foret', 'maison', 'a l&#039;eglise', 'maison', 'Les pays ___________ parlent le Francais', 'francophones', 'megaphones', 'anglophones', 'francaisphones', 'francophones', 'Un tableam c&#039;est ___________ en anglais', 'table', 'board', 'textbook', 'pencil', 'board'),
(9, 'second_term', '', 'test', 'JSS1', 'Social Studies', '', 'The process of socialization starts from ____________', 'life to death', 'birth to death', 'primary to secondary', 'home to church', 'birth to death', 'Government helps in socialization by making __________', 'transactions', 'correction', 'punishment', 'laws', 'laws', 'Road safety club helps to control _________ on the road', 'accident', 'traffic', 'officials', 'students', 'traffic', 'Pedestrains, cyclists, motorists are also known as road ____________', 'labourers', 'workers', 'users', 'police', 'users', 'The first cult group to be introduced in Nigeria schools was', 'Buccanears', 'Pyrates', 'dragons', 'black bra', 'Pyrates', 'HIV/AIDS, Syphilis, Gonorrhea are examples of ____________ diseases', 'respiratory', 'circulatory', 'digestive', 'venereal', 'venereal', 'HIV affects the _______________ system of the body', 'viral', 'immune', 'sexuality', 'reproductive', 'immune', 'These are forms of corruption except', 'bribery', 'embezzlement of public fund', 'extortion', 'rigging', 'rigging', 'Contemporary social problems can lead to these except', 'destruction of lives and property', 'increase in crime', 'insecurity and fear', 'economic growth', 'economic growth', 'National unity and integration helps to sustain', 'terrorism', 'democracy', 'corruption', 'poverty', 'democracy'),
(10, 'second_term', '', 'test', 'JSS1', 'Igbo', 'Zaa ajụjụ niile site n&#039;ihọrọ nke bụ aziza', 'Agwa ọma pụtara akpara maagwa ___________ nke mmadụ na akpa', 'dimma', 'adighi mma', 'jọrọ njọ', 'zoro ezo', 'dimma', 'Ezigbo umụaka na-akpa agwa _________', 'ọjọọ', 'ọma', 'udo', 'ogba aghara', 'ọma', 'Agwa ọma gunyere _______', 'izu ohi', 'ikwa iko', 'ikwu eziokwu', 'ịlụ ọgụ', 'ikwu eziokwu', 'Ọghọ dị na nwata ikpa ajọ agwa gunyere __________ ', 'onyinye ', 'oriri ', 'ntaramahụhụ ụtari', 'mbulizelu', 'ntaramahụhụ ụtari', 'E nwere ụdi agumagu __________ n&#039;asụsụ igbo', 'anọ', 'atọ', 'abụọ', 'ise', 'abụọ', 'Aha ọzọ e nwere ike ịkpọ agụmagụ ugbua bu _________  ', 'agụmagụ ederede', 'agụmagụ', 'ebiri ebi', 'ahụrụ anya', 'agụmagụ ederede', 'Ekere agụmagụ ọdinala ụzọ _______', 'atọ', 'abụọ', 'ise', 'anọ', 'atọ', 'Nkenudi agụmagụ odinaala bụ ________ ', 'ekwe', 'ejije', 'umuaka', 'noovl', 'ejije', 'A na-ede agụmagụ ___________ n&#039;akwụkwọ  ', 'odinaala', 'ugbua', 'odide', 'agụmagụ', 'ugbua', 'Tinye akara udaolu na okwu a (akwa - (cry))   ', '&frasl;  &setminus;', '&frasl; &frasl;', '&frasl; &mdash;', '&setminus; &setminus;', '&frasl; &frasl;'),
(11, 'second_term', '', 'test', 'JSS2', 'CRS', '', 'The word &quot;Beatitude&quot; means __________________', 'special reward', 'blessedness or blessings', 'righteous', 'joy', 'blessedness or blessings', 'The enemy who sowed the tares is the ________________', 'angels', 'devil', 'unfaithful servants', 'envious neighbours', 'devil', 'In the parable of the sower, the seed represents ___________', 'word of God', 'the field', 'grains like rice, beans', 'seedtrees', 'word of God', 'Identify the parable of the kingdom from these', 'the rich fool', 'prodigal son', 'the wheat and tares', 'Richman and Lazarus', 'the wheat and tares', 'The seeds fell on these places EXCEPT', 'pathway', 'rocky ground', 'bank of the river', 'thorns', 'bank of the river', 'After he had finished all that he had, one of these natural problems started in the country', 'famine', 'global economic melt down', 'epidemic disease', 'civil war', 'famine', 'When life becomes very difficult and unbearable, the prodigal son &quot;came to himself&quot; this means ', 'He became mad', 'He regretted', 'He repented', 'He sleeped up', 'He repented', 'In the parable of the unforgiving steward Jesus told peter that he should forgive his brother ___________________ a day', 'seven times seven times', 'seventeen times seven', 'seventy times seventy times', 'seventy times seven times', 'seventy times seven times', 'The first thing the richman requested from Abraham was ___________________', 'to preach to his brothers', 'a drop of water', 'to set him free', 'to give him food', 'a drop of water', 'Identify one of these parables as parable of the kingdom taught by Christ', 'the parable of the lost sheep', 'the parable of the lost coin', 'the parable of the sower', 'the parable of the rich fool', 'the parable of the sower'),
(12, 'second_term', '', 'test', 'JSS2', 'English Language', '', 'A narrative essay is a story that is narrated verbally or __________________', 'quantitative', 'written', 'orally', 'eassy', 'written', 'An example of adjective is ____________________', 'poor', 'quickly', 'sentence', 'adjective', 'poor', 'A type of adjective is _____________', 'mini adjective', 'subject adjective', 'adjective of numbers', 'adjective of adverb', 'adjective of numbers', 'An example of &frasl; iə &frasl; sound is ______________', 'words', 'shoe', 'pencil', 'India', 'India', 'A _____________ is a form of the verb that allows you to express time', 'narrative ', 'event', 'tense', 'past tense', 'tense', 'The _______________ is used when you want to say that something has already happened and was completed in the past', 'simple past tense', 'present tense', 'future tense', 'none of the above', 'simple past tense', 'He _____________ from London sometime ago', 'comes', 'come', 'came', 'go ', 'came', 'The Super Eagles ________________ the match', 'win', 'has win', 'watch', 'won', 'won', 'I _________________ my teeth everyday', 'brushes', 'brushed', 'brush', 'brash', 'brush', 'Who is the author of &quot;Strong Decision&quot;', 'Adamu C U', 'Udoye Uche B', 'Amadi Y C', 'NNamani Eunice', 'Udoye Uche B'),
(13, 'second_term', '', 'test', 'JSS2', 'HPE', '', 'The first world table tennis championship took place in ___________ year', '1970', '1926', '1927', '1928', '1927', 'The planned programme which provides knowledge, skills and attitude that enables an individual to avoid accident is called _______________', 'safety', 'safety education', 'accident', 'school accident', 'safety education', 'Home accident is called ____________________', 'domestic accident', 'school accident', 'occupational accident', 'market', 'domestic accident', 'A break in a bone is called ______________', 'dislocation', 'fracture', 'sprain', 'strain', 'fracture', 'The stroke that involves an immediate return of the ball as it lands on the table is __________________', 'chop', 'service', 'drop shot', 'half volley', 'half volley', 'The process of receiving the ball in the game as it is in play is ________________________', 'service', 'let', 'lob', 'rally', 'rally', 'In table tennis holding of the bat is known as ______________', 'holder', 'grip', 'service', 'skill', 'grip', 'Taking ball at random is one of the function of _____________', 'referee', 'umpire', 'stroke counter', 'assistant umpire', 'umpire', 'The damage of any part of the body during sports is called _________________', 'accident', 'wound', 'cut', 'sports injury', 'sports injury', 'Road accident is also known as ___________________ accident', 'occupational', 'traffic', 'domestic', 'school', 'traffic'),
(14, 'second_term', '', 'test', 'JSS2', 'History', '', 'Ghana means ______________________', 'powerful', 'industry', 'the king', 'war chief', 'war chief', 'One of the following band of invaders attacked the empire of Ghana', 'the Fulani', 'the Hausa', 'the Almoravids', 'the berbers', 'the Almoravids', 'The language of Soninke people was __________________', 'Tunka manin', 'Mande', 'Susu', 'Bozo', 'Mande', 'The ________________ comprises council of ministers who assisted the kings', 'the farmers', 'the kings', 'the nobles', 'craftsmen', 'the nobles', 'The capital of ancient Ghana was __________________', 'Mande', 'Soninke', 'Kumbi-Saleh', 'Wangara', 'Kumbi-Saleh', 'Mali empire was believed to have developed from the state of _______________', 'Soninke', 'Mande', 'Madin Kara', 'Malinke', 'Malinke', 'Sundiata Keita died in the year ______________', '1235AD', '1245AD', '1255AD', '1265AD', '1255AD', 'Mali empire was founded by _____________________', 'Sundiata Keita', 'Mansa Musa', 'Samariguru', 'Mansa Uli', 'Sundiata Keita', 'At what age did Sundiata Keita became the emperor of Mali', '16', '17', '18', '19', '18', 'Jihad means _____________________', 'war', 'holy war', 'journey', 'warrior', 'holy war'),
(15, 'second_term', '', 'test', 'JSS2', 'Social Studies', '', 'E-mail stands for ', 'Electrical mail', 'Engineering mail', 'Electronic mail', 'Education mail', 'Electronic mail', 'The world wide international network of computer is ', 'GSM', 'E-mail', 'phone', 'Internet', 'Internet', 'ICT has made the world a', 'Continent', 'global village', 'network city', 'rural city', 'global village', 'Rainfall, Ocean, Lake, river, sea are ______________________ sources of water', 'clean', 'artificial', 'natural', 'best', 'natural', 'Fishermen should avoid using chemicals in', 'market', 'water', 'fishing', 'poultry', 'fishing', 'The visible mass of water droplets suspended in the air is called ', 'rainfall', 'fog', 'haze', 'cloud', 'cloud', 'Humidity is measured with a', 'hydrometer', 'barometer', 'sundial', 'hygrometer', 'hygrometer', 'The degree of hotness or coldness of a place is known as', 'thermometer', 'temperature', 'pressure', 'humidity', 'temperature', 'Weather is a casual remark about the', 'Sun', 'atmosphere', 'earth', 'water', 'atmosphere', 'Itshe Kiri people call God ', 'Chukwu', 'Olorun', 'Abasi', 'Oritshe', 'Oritshe'),
(16, 'second_term', '', 'test', 'JSS2', 'Mathematics', '', 'Simplify (-5) x (3f)', '-15f', '15f', '-8f', '8f', '-15f', 'Remove bracket from 3(m - 2)', '3m + 5', '3m - 5', '3m + 6', '3m - 6', '3m - 6', 'if n = 4, m = 3 and x = 10. Find the value of mx + n', '30', '14', '17', '34', '34', 'A certain number is added to 7 and then divided by 12. The result is 4. Find the number', '12', '41', '48', '24', '41', 'Solve this equation 1/y + 1/4  =  1/3', '3', '4', '12', '15', '12', 'Simplify 1/p + 1/p', '2p/p', 'p/2', '1/p', '2/p', '2/p', 'Which of the following is not an algebraic term', '3x + 2', '6y', '9ts', '3rv', '3x + 2', 'Simplify 4a/3x - 2a/3y =', '2a/3xy', '6a/3x', '(4ay-2ax)/3xy', '2xy/3xy', '(4ay-2ax)/3xy', 'Factorise vw - uw', 'v(w - u)', 'u(w + v)', 'w(v + u)', 'w(v - u)', 'w(v - u)', 'Expand (5d - 4)(5d - 6)', '25d^2 - 50d + 24', '10d^2 - 10d + 24', '10d^2 + 10d + 24', '25d^2 + 50d + 24', '25d^2 - 50d + 24'),
(17, 'second_term', '', 'test', 'JSS1', 'Computer Studies', '', 'Coeries are examples of __________________ counting devices', 'early', 'late', 'mechanical', 'electronic', 'early', 'First generation computers used ____________ technology', 'transistor', 'vacuum tube', 'AI', 'IC', 'vacuum tube', 'Napier&#039;s bone was invented by __________________', 'John Thomas', 'Ken Napier', 'John Napier', 'Napier James', 'John Napier', 'Pascaline was invented in the year ______________________', '1642', '1942', '1960', '1891', '1642', 'Leibniz Wilhelm invented a machine called ________________', 'step reckoner', 'pascaline', 'punched card', 'jaquard loom', 'step reckoner', 'The father of computer is known as ______________', 'John Mauculy', 'Blaise Pascal', 'Grace Johns', 'Charles Babbage', 'Charles Babbage', 'AI is the short for _________________', 'Automatic Inspection', 'Artificial Instruction', 'Artificial Intelligence', 'Art Intelligence', 'Artificial Intelligence', 'Second generation computers existed between _________________ and _______________', '1954 and 1906', '1956 and 1963', '1960 and 1963', '1963 and 2023', '1956 and 1963', 'Describing computer as IPO system, P means ____________________', 'program', 'printer', 'process', 'plotter', 'process', 'Input and Output devices are collectively referred to as _____________________', 'Computer system', 'System unit', 'Devices', 'Peripherals', 'Peripherals'),
(18, 'second_term', '', 'test', 'JSS1', 'Business Studies', '', 'All EXCEPT one are qualities of a clerical staff _______________', 'punctuality', 'obedient', 'honest', 'disobedient', 'disobedient', 'The following are forms of business organisation EXCEPT one ___________', 'sole proprietorship', 'trade', 'partnership', 'co-operative society', 'trade', 'Which of the following is not an advantage of a sole proprietorship ? _________________', 'easy to establish', 'easy decision making', 'small capital to establish', 'none of the above', 'none of the above', 'One of the following is NOT a division of occupation __________________', 'extractive', 'commercial', 'entrepremier', 'fishing', 'entrepremier', 'The following are factors that cause people to tell lies EXCEPT one ________________', 'being reliable', 'gossiping', 'honesty', 'good behaviour', 'gossiping', 'All EXCEPT one are the consequences of not being truthful ___________________', 'you are well respected', 'you are not trusted', 'you are considered unreliable', 'people will look down on you', 'you are well respected', 'A business established, owned and financed by one person is known as ___________________', 'cooperative society', 'partnership', 'sole proprietorship', 'public enterprises', 'sole proprietorship', 'The buying and selling of goods between two or more countries is known as _________________ trade', 'export', 'foreign', 'import', 'home', 'foreign', 'The formation of a partnership is always supported by a legal document called ____________', 'sleep partner', 'limited partner', 'partnership deed', 'ordinary partnership', 'partnership deed', 'One of the following is NOT factors of production __________________', 'land ', 'labour', 'capital', 'partnership', 'partnership'),
(19, 'second_term', '', 'test', 'JSS1', 'Mathematics', '', 'Simplify 4.565 + 0.05', '91.31', '4.615', '191.6', '81.321', '4.615', 'Express  342 base six to base 10', '44', '57', '134', '342', '134', 'Convert 19 base ten to base 2', '10001', '10111', '10011', '10110', '10011', 'Write in figure: Three hundred and thirty-two thousand and five', '33205', '332005', '30032005', '3320005', '332005', 'What is the place value of 9 in 2984?', 'nine hundred', 'nine thousand', 'nine tens', 'nine units', 'nine hundred', 'Add 10111 base two and 11101 base two', '10110', '110100', '101110', '1110010', '110100', 'Convert 25% to fraction in it&#039;s lowest term', '3/5', '1/4', '3/4', '1/2', '1/4', 'Convert 1/2 to decimal', '0.5', '0.25', '0.75', '2.5', '0.5', 'Subtract 11011 base two from 11110 base two', '11', '99', '101', '110', '11', 'Binary numbers are base ___________ numbers', '4', '8', '2', '3', '2'),
(20, 'second_term', '', 'test', 'JSS1', 'Agric Science', '', 'A ruminant animal has _________________ stomach chambers', '4', '3', '2', '1', '4', 'Crops which mature  within two years are called ____________ crops', 'annual', 'byiennial', 'biennial', 'dicot', 'biennial', 'Another name for ruminant animal is called _________________', 'mongastric', 'polygastric', 'monocropping', 'gonorrhea', 'polygastric', 'Non-ruminant digestive system is so similar to that of _________________', 'goat', 'cow', 'man', 'sheep', 'man', 'The cost of feeding is high in ________________ animal', 'ruminant', 'polygastric', 'cattle', 'non-ruminant', 'non-ruminant', 'Animal that live both on the land and the water is called ____________', 'amphibians', 'terrestrial', 'aquatic', 'guard', 'amphibians', 'Farm animals that are very big in size are called ____________ animals', 'small sized', 'little sized', 'large sized', 'monogastric', 'large sized', 'The fruit that is known as &quot;carica papaya&quot; is _______________ ', 'orange', 'mango', 'apple', 'paw-paw', 'paw-paw', 'Animals that are kept mainly for milk production are called ______________', 'dairy', 'work', 'pet', 'aquatic', 'dairy', 'When the undigested grass in the rumen enters reticulum and back to the mouth and the animal begins to chew the grass again is called _____________', 'chewing gum', 'chewing cud', 'chewing mouth', 'chewing stick', 'chewing cud'),
(21, 'second_term', '', 'test', 'JSS1', 'History', '', 'The NOK culture was discovered in the year ___________', '1958', '1928', '1947', '1938', '1928', 'The following are centres of ancient civilization EXCEPT', 'NOK', 'Kaduna', 'Igbo-ukwu', 'ILe-ife', 'Kaduna', 'The political head of Ife is _______________ ', 'Alaafin', 'Ooni', 'Ets', 'Oba', 'Ooni', 'The cradle of yoruba civilization was at __________', 'Oshogbo', 'Ibadan', 'ILe-Ife', 'Egba', 'ILe-Ife', 'The first Ife works to be discovered were ___________', 'Human heads', 'Glass beads', 'Goat head', 'Animal heads', 'Glass beads', 'The brass and terra-cotta heads of Ife had tribal marks called ____________', 'start', 'trate', 'striations', 'traits', 'striations', 'The Yoruba nation originated from Ife through the legendary figure of _______________', 'Amina', 'Zaria', 'Chineke', 'Oduduwa', 'Oduduwa', 'The Benin had a ruling line or dynasty made up of kings called _____________', 'ogisa', 'ogis', 'ogiso', 'osha', 'ogiso', 'NOK culture is also found in these locations EXCEPT', 'Taruga', 'Kagara', 'Yelwa', 'Aba', 'Aba', 'The NOK culture was discovered by a group of _____________', 'Farmers', 'Traders', 'Tin miners', 'historians', 'Tin miners'),
(22, 'second_term', '', 'test', 'JSS1', 'Basic Science', '', 'The practice of restraining one from all aspect of sexual intercourse is called _________________', 'social', 'abstinence', 'sexual intercourse', 'STIs', 'abstinence', 'A person that has self confidence is under ______________ esteem', 'low self', 'middle self', 'high self', 'none of them', 'high self', 'Factors that affects self esteem are the following EXCEPT ________________', 'Gender', 'environment', 'media', 'sport', 'sport', 'Another name for menstruation is ________________', 'monopause', 'menses', 'wet dream', 'festis', 'menses', 'One of the factor __________________ is a similarity between boys and girls during puberty', 'body odor', 'growth of beard', 'ejaculation', 'enlargement of scrotum', 'body odor', 'The statement that says &quot;it is not good for boys to have wet dreams &quot; is referred to as ____________', 'culture', 'myth', 'fact', 'truth', 'myth', '________________ is one of the classification of matter', 'living things', 'solid', 'gas', 'stone', 'living things', 'A substance that can change from solid to gas without changing first to liquid state is called _____________', 'solid', 'liquid', 'gas', 'sublimation', 'sublimation', 'One of these substances sublime __________', 'camphor', 'water', 'soap', 'gas', 'camphor', '______________ is an example of non-living things', 'soil', 'tree', 'cow', 'ant', 'soil'),
(23, 'second_term', '', 'test', 'JSS1', 'HPE', '', 'Football association became a legalized profession in ______________ year', '1904', '1963', '1885', '1996', '1885', 'Examples of non locomotive movement are these except _______________', 'bending', 'twisting', 'stretching', 'running', 'running', 'The type of fundamental movement that involve moving from one place to another is known as ________________ movement', 'locomotor', 'gymnastics', 'water sport', 'non-locomotor', 'locomotor', 'The act of putting the ball into play is ____________ ', 'volleying', 'digging', 'retrieving', 'service', 'service', 'Football is also known as _________________', 'Tsechu', 'Soccer', 'Ekpeskyros', 'Gymnastics', 'Soccer', 'To co-ordinate the substitution of a player is one of the function of __________________', 'coach', 'referee', 'umpire', 'assistant referees', 'umpire', 'These are types of service in volley ball except _________________', 'Tennis service', 'Side arm service', 'Under arm service', 'Volleying', 'Volleying', 'Another name for pre-colonial sports is _____________________', 'Traditional sports', 'football', 'Tsechu', 'Abula', 'Traditional sports', 'The man that invented Abula in Nigeria was _________________', 'Dr. J.C Omoruan', 'A.Oduyale', 'Mt Elias Yusuf', 'A. Ajiduah', 'Mt Elias Yusuf', 'The official that uses yellow card to book a player in football is ________________', 'Umpire', 'Referee', 'Linesmen', 'Coach', 'Referee'),
(24, 'second_term', '', 'test', 'JSS1', 'CRS', '', 'The willingness or readiness to accept and carry out a given instruction, rules, commands or order is called ___________________', 'Displine', 'Agreement', 'Obedience', 'Understanding', 'Obedience', 'When Abraham answered God&#039;s call and received hos promises he was __________ years old', 'Hundred', 'Ninety-nine', 'Seventy-five', 'Seventeen', 'Seventy-five', 'How old was Abraham when Isaac was born ______________', '85 years', '50 years', '75 years', '100 years', '100 years', 'Sarah had a son at ___________ years', 'Ninety years', 'Eighty years', 'Sixty years', 'Hundred years', 'Ninety years', 'The descendant of Abraham through whom the nation of Israel was born is ________________', 'Isaac', 'Esau', 'David', 'Jacob', 'Isaac', 'Joseph was sold to the Ishmaelite for ________________ shekels of silver', 'Thirty', 'Twenty', 'Forty', 'Twenty-five', 'Twenty', '________________ decided to go back to Moab when she discovered that her future is not promising', 'Ruth', 'Naomi', 'Orpah', 'Rahah', 'Orpah', 'One of the sad experience Joseph had during his service at portiphar&#039;s house was ___________________', 'Hunger and starvation', 'Imprisonment', 'Humiliation and nakedness', 'Hard labour as a slave', 'Imprisonment', 'Ruth the Moabites eventually because the ___________ of Jesus Christ', 'Step -Mother', 'Ancestress', 'Mother-in-Law', 'Ancestor', 'Imprisonment', 'The father of Abraham was called _____________', 'Terah', 'Haran', 'Nahor', 'Lemech', 'Terah'),
(25, 'second_term', '', 'test', 'JSS1', 'Security Education', '', 'Individuals expressing their dissatisfactions due to unfair judicial rulings from the law court and unjust imprisonment is as a result of _____________', 'politics', 'unemployment', 'poor judgement', 'corrupt judiciary and prison system', 'corrupt judiciary and prison system', '_____________ is a state of being jobless which often leads people to commiting crimes', 'politics', 'poor judgement', 'unemployment', 'corrupt judiciary and prison system', 'unemployment', 'Historically __________________ brought about the advancement in production process', 'labour', 'movement', 'technology', 'industrialization', 'industrialization', 'General causes of common crimes includes all except _________________', 'poverty and stealing', 'poverty and unemployment', 'human weakness and poverty', 'peer pressure and politics', 'poverty and stealing', 'A state of unhappiness and low morale is known as _________________', 'depression', 'peer infulence', 'psychosis', 'depression', 'depression', 'An emotional wound is known as ________________', 'traumatic stress', 'depression', 'psychological factor', 'psychosis', 'traumatic stress', '________________, ____________________ and __________________ are the specific causes of common crimes.', 'psychological, psychosis and political', 'peer pressure, politics and poverty', 'psychological, human weakness and socio-economic', 'social and economic, biological and psychological', 'social and economic, biological and psychological', '____________ and ____________ are examples of social reactions to crime.', 'feeling of insecurity and fear of being alone', 'love of family members and acceptance by the community', 'social upliftment and integration', 'financial stability and educational qualification', 'feeling of insecurity and fear of being alone', '______________ and _________ are effects of common crimes in the community', 'lack of local involvement and poor academic performance', 'feeling of insecurity and dissatisfaction', 'economic losses and untimely death', 'it can lead one into prison and disruption of unity', 'feeling of insecurity and dissatisfaction', 'physical reactions to crimes includes all EXCEPT ____________', 'fear and anxiety', 'muscle pain', 'difficulty in eating', 'headaches', 'fear and anxiety'),
(26, '3rd Term', '2023/2024', 'test', 'JSS1', 'English Language', '', 'A word used instead of a noun in a sentence is called a', 'noun', 'verb', 'pronoun', 'adjective', 'pronoun', 'Underline the following pronouns in the following sentences from no 2- 6. Uche did the drawings himself', 'did', 'drawing', 'the', 'himself', 'himself', 'This is the student who won the prizehis', 'This', 'who', 'won', 'student', 'who', 'Those are the buildings', 'buildings', 'those', 'are', 'they', 'those', 'Whose are those shirts', 'whose', 'shirts', 'are', 'those', 'whose', 'This is the bag which a bought for you', 'This', 'bag', 'bought', 'which', 'which', 'The essay that tells a story is called `', 'descriptive essay', 'narrative essay', 'narrative essay', 'argumentative', 'narrative error', 'You can go on, I _______ what you are saying ', 'can hear', 'would hear', 'heard', 'I&#039;m hearing', 'can heaf', 'A verb can be regular _______', 'tense', 'irregular', 'base form', 'past', 'irregular', 'Regular verbs form their part participle byadding___________', '-e', '-th', '-y', '-ed', '-ed'),
(27, '3rd Term', '2023/2024', 'test', 'JSS1', 'CRS', 'ANSWER ALL', 'On the Seventh day of creation, God ____________________________', 'created sea animals', 'created human beings', 'created vegetation', 'rested from his work', 'rested from his work', 'The legitimate and voluntary union between a matured man and woman is called_________________________', 'Husband', 'Institution', 'Marriage', 'Home', 'Marriage', 'Every male child born to Abraham must be circumcised on the __________ day', '10th', '7th', '8th', '3rd month', '8th', 'Qualities of good and faithful service are these EXCEPT ONE', 'Selflessness', 'Honesty', 'Stealing', 'God fearing', 'Stealing', 'In the school, the child learns ______________ education ', 'Informal', 'Formal', 'Relationship', 'Citizen', 'Formal', 'The School is the next important agent of _______________ of the child after the ________________', 'Morals/family', 'Community/student', 'Socialization/family', 'Principal/vice-principal', 'Socialization/family', 'The consequences of choosing bad friends are these EXCEPT', 'lead to cultism', 'patient spirit', 'lead to prostitution', 'laziness', 'patient spirit', 'The friendship between David and Jonathan had a lasting experience and it extended to their children called', 'Joseph', 'Mephibosheth', 'Amalekite', 'Amalekite', 'Mephibosheth', '_______________ is a group of people who live in a known defined territory', 'Israel', 'family', 'community', 'customs', 'community', 'The community leader in charge of your house is called', 'father', 'Igwe', 'Ward leader', 'Elders', 'father'),
(28, '3rd Term', '2023/2024', 'test', 'JSS1', 'CCA', '', 'the combination of two 2 or more sounds heard at the same time in proper order is called', 'harmony', 'melody', 'clef', 'major', 'harmony', 'the music used for healing is known as _______________ music', 'popular', 'folk', 'social', 'palliative', 'palliative', 'music is a universal language of the  ______________________', 'point', 'soul', 'sacred', 'Bimp', 'soul', 'what is the name of the first line in the treble stave?', 'C', 'D', 'E', 'G', 'E', 'Difference of pitch is made clear in music by the use of ___________________________', 'stave', 'clef', 'key', 'natural', 'stave', 'A piece of music can be transcribed from staff notation to ______________________________', 'pietc notation', 'Solfa notation', 'G notation', 'folk notation', 'Solfa notation', 'the rest sign above is _______________________ rest', 'minim', 'semi breve', 'quaver', 'breve', 'minim', 'chromatiei scale has _______________________________ notes', '10', '12', '13', '16', '13', 'A scale is a series of ________________________________________ arranged in  alphabetical order', 'notes', 'dots', 'sharp', 'flat', 'notes', 'the symbol for double sharp is ________________________________                                                                                                                  ', '#', 'h', 'X', 'bb', 'X'),
(29, '3rd Term', '2023/2024', 'test', 'JSS1', 'Home Economics', '', 'carbohydrates are described as __________________________________________', 'body building food', 'protective food', 'energy', 'giving food', 'Energy', 'keeping the natural balance of the body aligned is called ____________________________________', 'posture', 'position', 'positive post', '______', 'posture', 'the organ for hearing is known as _______________________________________________', 'eye', 'ear', 'nose', '___________', 'ear', '__________________________________________ is a regular pattern of eating the same food always to maintain good health', 'food', 'diet', 'feeding and eating habit', '_________', 'feeding and eating habit', 'any substances added to food at the time of processing or preparation to become part of food is __________________________________', 'food addictive', 'drug abuse', 'healthy eating', '__________', 'food addictive', 'the intentional improper use of a drugs is called ______________________________________', 'self medication', 'drug abuse', 'scarification', '_________', 'drug abuse', 'the act of relaxing without sleeping is __________________________________________', 'fatigue ', 'health', 'rest', '___________', 'rest', 'the result from choosing nutritious food in conscious way is known as ___________________________________________', 'eating habit ', 'healthy feeding habits', 'unhealthy feeding habits', '____________', 'healthy feeding habits', 'one of the factors that affect healthy feeding practices can be say to ______________________________________', 'eating adequate diet', 'kwashiorkor', 'marasmius', '__________', 'eating adequate diet', 'one of this is correct in practicing healthy eating habits ______________________________________', 'do not talk with food in your mouth', 'do not wash your food before and after meals', 'do not chew your food properly', '____________', 'do not talk with food in your mouth');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` bigint(255) NOT NULL,
  `student_id` bigint(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `class` varchar(200) NOT NULL,
  `session` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `English_Language` varchar(255) NOT NULL,
  `Mathematics` varchar(255) NOT NULL,
  `Business_Studies` varchar(255) NOT NULL,
  `Agric_Science` varchar(255) NOT NULL,
  `Basic_Science` varchar(255) NOT NULL,
  `Basic_Technology` varchar(255) NOT NULL,
  `CRS` varchar(255) NOT NULL,
  `Social_Studies` varchar(255) NOT NULL,
  `History` varchar(255) NOT NULL,
  `Civic_Education` varchar(255) NOT NULL,
  `Igbo` varchar(255) NOT NULL,
  `Computer_Studies` varchar(255) NOT NULL,
  `French_Language` varchar(255) NOT NULL,
  `CCA` varchar(255) NOT NULL,
  `Home_Economics` varchar(255) NOT NULL,
  `HPE` varchar(255) NOT NULL,
  `Security_Education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `student_id`, `fullname`, `class`, `session`, `term`, `English_Language`, `Mathematics`, `Business_Studies`, `Agric_Science`, `Basic_Science`, `Basic_Technology`, `CRS`, `Social_Studies`, `History`, `Civic_Education`, `Igbo`, `Computer_Studies`, `French_Language`, `CCA`, `Home_Economics`, `HPE`, `Security_Education`) VALUES
(3, 1, 'AMAECHI VICTOR NNAEMEKA', 'JSS1A', '2023/2024', '3rd Term', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` bigint(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`, `date`) VALUES
(2, '2023/2024', '2024-05-21 17:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `session_term`
--

CREATE TABLE `session_term` (
  `id` bigint(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_term`
--

INSERT INTO `session_term` (`id`, `session`, `term`, `date`) VALUES
(2, '2023/2024', '3rd Term', '2024-05-21 18:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `English_Language` varchar(255) NOT NULL,
  `Mathematics` varchar(255) NOT NULL,
  `Business_Studies` varchar(255) NOT NULL,
  `Agric_Science` varchar(255) NOT NULL,
  `Basic_Science` varchar(255) NOT NULL,
  `Basic_Technology` varchar(255) NOT NULL,
  `CRS` varchar(255) NOT NULL,
  `Social_Studies` varchar(255) NOT NULL,
  `History` varchar(255) NOT NULL,
  `Civic_Education` varchar(255) NOT NULL,
  `Igbo` varchar(255) NOT NULL,
  `Computer_Studies` varchar(255) NOT NULL,
  `French_Language` varchar(255) NOT NULL,
  `CCA` varchar(255) NOT NULL,
  `Home_Economics` varchar(255) NOT NULL,
  `HPE` varchar(255) NOT NULL,
  `Security_Education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_no`, `fullname`, `class`, `English_Language`, `Mathematics`, `Business_Studies`, `Agric_Science`, `Basic_Science`, `Basic_Technology`, `CRS`, `Social_Studies`, `History`, `Civic_Education`, `Igbo`, `Computer_Studies`, `French_Language`, `CCA`, `Home_Economics`, `HPE`, `Security_Education`) VALUES
(1, 'EASSE243147', 'AMAECHI VICTOR NNAEMEKA', 'JSS1A', '2', '6', '2', '7', '3', '', '3', '3', '5', '', '2', '2', '4', '', '0', '6', '1'),
(2, 'EASSE242892', 'ANWADI SOLOMON CHINEDU', 'JSS1A', '2', '5', '6', '7', '5', '', '3', '6', '3', '', '6', '4', '1', '7', '', '6', '2'),
(3, 'EASSE242902', 'ASOGWA OLUCHI JOSEPHINE MGBEDEJOH', 'JSS1A', '6', '10', '8', '10', '9', '', '8', '8', '6', '', '3', '8', '8', '9', '', '7', '7'),
(4, 'EASSE242908', 'CHIGBO   CHIZITEREM GRACE', 'JSS1A', '6', '6', '6', '7', '8', '', '3', '7', '5', '', '7', '9', '8', '8', '', '7', '3'),
(5, 'EASSE243030', 'CHIME CHISOM  DIVINE', 'JSS1A', '10', '10', '9', '9', '10', '', '6', '8', '9', '', '6', '9', '10', '10', '', '7', '6'),
(6, 'EASSE243149', 'EDEH EMMANUEL CHIEMERIE', 'JSS1A', '9', '4', '1', '4', '4', '', '2', '4', '2', '', '', '2', '1', '5', '', '5', '3'),
(7, 'EASSE242934', 'EGBOSIMBA  VICTORY BEAUTY ADAEZE', 'JSS1A', '8', '8', '8', '10', '8', '', '8', '9', '10', '', '4', '10', '4', '8', '', '6', '6'),
(8, 'EASSE243120', 'EJEAGWU ONYINYECHI EMMANUELLA', 'JSS1A', '4', '2', '5', '1', '1', '', '2', '1', '3', '1', '5', '3', '3', '4', '', '3', '2'),
(9, 'EASSE243135', 'EKWUEME PRECIOUS ADAEZE', 'JSS1A', '5', '9', '3', '10', '8', '', '6', '4', '7', '', '4', '5', '6', '9', '', '7', '2'),
(10, 'EASSE243131', 'EZEOGU CHIAGOZIEM JOHNPAUL', 'JSS1A', '6', '5', '7', '9', '7', '', '6', '7', '7', '', '4', '8', '4', '8', '', '6', '2'),
(11, 'EASSE243032', 'EZEOKOLI MARVELLOUS ODINAKA', 'JSS1A', '4', '3', '5', '7', '2', '', '5', '7', '4', '', '5', '2', '2', '8', '', '7', '3'),
(12, 'EASSE242955', 'IBE KAMSIYOCHUKWU FAVOUR', 'JSS1A', '7', '7', '6', '9', '10', '', '7', '9', '7', '', '8', '8', '10', '9', '', '6', '5'),
(13, 'EASSE243089', 'IDUH GREAT MARVELOUS CHIMDUMEBI', 'JSS1A', '8', '7', '7', '10', '9', '', '7', '9', '6', '', '8', '7', '8', '10', '', '6', '3'),
(14, 'EASSE242954', 'IFEANYI OLUCHI DIVINE', 'JSS1A', '6', '6', '5', '4', '4', '', '5', '5', '7', '', '1', '3', '1', '5', '', '2', '2'),
(15, 'EASSE242937', 'IFEANYI SUCCESS CHIEMERIE', 'JSS1A', '6', '6', '5', '7', '6', '', '7', '7', '5', '', '4', '10', '5', '6', '', '3', '4'),
(16, 'EASSE243118', 'IGBO MELCHIZEDEK SOPURUCHUKWU', 'JSS1A', '5', '3', '1', '4', '2', '', '4', '4', '2', '', '2', '2', '4', '', '', '2', '1'),
(17, 'EASSE242925', 'IVUANYI PRECIOUS CHIDERA', 'JSS1A', '7', '8', '5', '8', '9', '', '8', '10', '7', '', '7', '9', '8', '10', '', '8', '7'),
(18, 'EASSE243022', 'NDUKA PRECIOUS MMACHUKWU', 'JSS1A', '9', '6', '5', '8', '8', '', '6', '10', '7', '', '4', '8', '3', '9', '', '7', '9'),
(19, 'EASSE243090', 'NNAMANI FRANKLIN UCHECHUKWU', 'JSS1A', '4', '4', '2', '7', '5', '', '6', '6', '8', '', '4', '4', '3', '7', '', '4', '2'),
(20, 'EASSE243121', 'NWANKWO GIFT CHINAZA', 'JSS1A', '4', '2', '4', '5', '8', '', '6', '5', '3', '', '8', '4', '3', '7', '', '3', '4'),
(21, 'EASSE242966', 'NWOBODO ESTHER CHIMASOKAM', 'JSS1A', '5', '6', '6', '7', '4', '', '3', '5', '4', '', '6', '4', '4', '6', '', '5', '3'),
(22, 'EASSE242997', 'NWOKEABIA CHIEMEZUO DOMINION', 'JSS1A', '7', '7', '8', '9', '10', '', '7', '9', '7', '', '6', '10', '7', '10', '', '8', '5'),
(23, 'EASSE242956', 'OBIESILI EDITH MUNACHIMSO', 'JSS1A', '7', '6', '6', '8', '4', '', '3', '6', '7', '', '8', '6', '6', '8', '', '7', '4'),
(24, 'EASSE242904', 'OGBONNA DESTINY CHIMAOBI', 'JSS1A', '5', '7', '6', '9', '8', '', '8', '8', '7', '', '6', '7', '6', '10', '', '8', '2'),
(25, 'EASSE242914', 'OJEH OLUOMACHUKWU EMMANUELLA', 'JSS1A', '8', '5', '6', '6', '7', '', '7', '9', '3', '', '7', '8', '5', '8', '', '6', '7'),
(26, 'EASSE242920', 'OJIKE CHIDIEBERE WILSON', 'JSS1A', '8', '9', '8', '8', '8', '', '7', '8', '7', '', '3', '8', '10', '9', '', '7', '5'),
(27, 'EASSE242889', 'OKOLI CHUKWUMA JOHN', 'JSS1A', '5', '4', '5', '9', '5', '', '4', '7', '1', '', '3', '6', '2', '5', '', '6', '2'),
(28, 'EASSE243054', 'OKORO FAITHFUL CHIZURUMOKE', 'JSS1A', '6', '2', '3', '7', '7', '', '3', '4', '5', '', '7', '3', '6', '8', '', '8', '3'),
(29, 'EASSE242988', 'OKOYE CHUKWUEBUKA EMMANUEL', 'JSS1A', '4', '0', '5', '7', '7', '', '7', '6', '8', '', '4', '6', '6', '', '', '6', '5'),
(30, 'EASSE242938', 'OKOYE FAVOUR NGOZI', 'JSS1A', '6', '3', '6', '6', '5', '', '5', '5', '3', '', '6', '6', '6', '', '', '7', '6'),
(31, 'EASSE242901', 'ONUZULIKE CHUKWUEMEKA BRYAN', 'JSS1A', '5', '7', '5', '5', '7', '', '3', '6', '3', '', '2', '2', '3', '4', '', '4', '3'),
(32, 'EASSE243011', 'ONWE MARVELLOUS CHIMAMANDA', 'JSS1A', '7', '7', '6', '8', '9', '', '7', '6', '7', '', '8', '5', '5', '9', '', '4', '5'),
(33, 'EASSE242919', 'ONWUEGBUSI CHUKWUEMERIE CHIMSIMDINDU', 'JSS1A', '8', '3', '4', '6', '4', '', '3', '7', '6', '', '3', '6', '3', '4', '', '5', '4'),
(34, 'EASSE243080', 'ONWULIRI KOSISOCHUKWU PRECIOUS', 'JSS1A', '9', '6', '8', '9', '7', '', '4', '9', '10', '', '3', '7', '7', '9', '', '8', '4'),
(35, 'EASSE242957', 'ONYEBUCHI CHIDIOGO MIRABEL', 'JSS1A', '8', '6', '5', '9', '8', '', '5', '8', '8', '', '4', '6', '8', '7', '', '7', '3'),
(36, 'EASSE243106', 'ORAKWE CHIAMAKA HAPPINESS', 'JSS1A', '2', '3', '5', '7', '3', '', '2', '4', '8', '', '3', '4', '2', '4', '', '3', '1'),
(37, 'EASSE242936', 'SALIFU  GODSPEED', 'JSS1A', '5', '3', '2', '9', '5', '', '2', '4', '8', '', '1', '1', '2', '', '', '4', '1'),
(38, 'EASSE243047', 'UCHENNA ISAAC CHIMDINDU', 'JSS1A', '10', '8', '10', '10', '9', '', '5', '8', '8', '', '8', '6', '9', '10', '', '7', '5'),
(39, 'EASSE243044', 'UDEH EMMANUEL CHUKWUJINDU', 'JSS1A', '7', '6', '4', '9', '10', '', '6', '7', '7', '', '9', '7', '5', '10', '', '7', '4'),
(40, 'EASSE243029', 'UGOCHUKWU MIRACLE CHUKWUJINDUM', 'JSS1A', '3', '6', '5', '7', '6', '', '7', '6', '5', '', '1', '3', '4', '6', '', '7', '4'),
(41, 'EASSE243067', 'NWIGWE MICHEAL CHINEDU', 'JSS1A', '3', '3', '7', '7', '5', '', '4', '7', '7', '', '3', '3', '3', '', '', '6', '4'),
(42, 'EASSE243155', 'OKORO  JOY OLUOMACHUKWU', 'JSS1A', '4', '5', '2', '4', '5', '', '4', '3', '2', '', '3', '4', '2', '2', '', '6', '3'),
(43, 'EASSE242903', 'AGINA CHINAZA MICHELLE', 'JSS1B', '9', '8', '5', '9', '8', '', '7', '9', '8', '', '7', '6', '9', '', '', '5', '5'),
(44, 'EASSE242943', 'AGU GODSPOWER CHIMDALU', 'JSS1B', '9', '8', '7', '10', '10', '', '8', '5', '9', '', '7', '10', '9', '', '', '8', '6'),
(45, 'EASSE242907', 'ANI CHUKWUEMEKA FRANKLIN', 'JSS1B', '8', '7', '6', '9', '7', '', '6', '8', '8', '', '6', '5', '6', '', '', '8', '5'),
(46, 'EASSE243031', 'ANIAGU IFECHUKWU BLESSING', 'JSS1B', '8', '8', '7', '6', '9', '', '5', '7', '9', '', '8', '6', '6', '', '', '7', '3'),
(47, 'EASSE242896', 'AYANWU DANIEL NZUBECHUKWU', 'JSS1B', '6', '7', '7', '7', '9', '', '8', '8', '7', '', '6', '5', '3', '', '', '7', '4'),
(48, 'EASSE243025', 'ARINZE PEARL CHINECHEREM', 'JSS1B', '10', '8', '7', '9', '9', '', '6', '8', '8', '', '7', '6', '4', '', '', '7', '6'),
(49, 'EASSE242888', 'BENSON GOSPEL CHIDIUTO', 'JSS1B', '4', '6', '5', '3', '8', '', '6', '6', '6', '', '7', '3', '3', '', '', '3', '5'),
(50, 'EASSE242913', 'CHIBUISI EMMANUEL CHIMJINDU', 'JSS1B', '3', '3', '4', '3', '1', '', '5', '7', '6', '', '8', '3', '4', '', '', '6', '3'),
(51, 'EASSE243069', 'CHIBUZO SUCCESS CHUKWUKAIMA', 'JSS1B', '6', '9', '3', '8', '6', '', '6', '4', '8', '', '1', '6', '5', '', '', '8', '3'),
(52, 'EASSE242909', 'CHIDIOBI CHIZURUM MIRACLE', 'JSS1B', '8', '8', '6', '7', '7', '', '5', '6', '8', '', '8', '8', '4', '', '', '5', '4'),
(53, 'EASSE243023', 'CHIGERE CHIDIMMA FRANISCA', 'JSS1B', '9', '7', '6', '8', '7', '', '9', '8', '10', '', '7', '6', '5', '', '', '5', '8'),
(54, 'EASSE242912', 'CHIKEZIE MUNACHI JOHN MICHEAL', 'JSS1B', '5', '8', '5', '9', '6', '', '5', '7', '9', '', '4', '6', '4', '', '', '4', '4'),
(55, 'EASSE242940', 'CHIME KENECHUKWU FRANKLIN', 'JSS1B', '10', '8', '6', '10', '10', '', '7', '9', '5', '', '8', '6', '6', '', '', '8', '8'),
(56, 'EASSE243101', 'CHUKWUEMEKA SOMTO FESTUS', 'JSS1B', '6', '3', '2', '8', '6', '', '5', '4', '1', '', '6', '3', '1', '', '', '6', '5'),
(57, 'EASSE242935', 'CHUKWUEMEZIE LOVETH AKACHUKWU', 'JSS1B', '6', '4', '5', '6', '6', '', '6', '8', '7', '', '6', '5', '5', '', '', '6', '5'),
(58, 'EASSE243097', 'EBUKA-NNAMANNI CHUKWUNONSO EMMANUEL', 'JSS1B', '2', '2', '2', '5', '4', '', '6', '6', '4', '', '4', '4', '5', '', '', '6', '2'),
(59, 'EASSE243024', 'EGBO VICTORY CHIMAOBI', 'JSS1B', '5', '7', '5', '9', '8', '', '7', '10', '10', '', '6', '4', '2', '', '', '6', '3'),
(60, 'EASSE243043', 'EGBUNA HOLINESS UCHECHUKWU', 'JSS1B', '10', '8', '8', '8', '8', '', '8', '9', '9', '', '4', '8', '8', '', '', '6', '7'),
(61, 'EASSE242986', 'EJIM PETER OLUEBUBE', 'JSS1B', '5', '6', '4', '8', '10', '', '4', '8', '8', '', '7', '5', '7', '', '', '5', '2'),
(62, 'EASSE243123', 'EMMANUEL CHIMDINDU GODFREY', 'JSS1B', '5', '8', '3', '8', '6', '', '6', '6', '8', '', '2', '5', '8', '', '', '7', '3'),
(63, 'EASSE243018', 'IHEAMA GLAD ONYEBUCHI', 'JSS1B', '10', '9', '10', '10', '10', '', '8', '10', '10', '', '7', '7', '9', '', '', '8', '6'),
(64, 'EASSE242952', 'IKEGWUONU CHIEMEIRE JOSHUA', 'JSS1B', '8', '5', '6', '7', '8', '', '5', '10', '7', '', '7', '7', '2', '', '', '5', '3'),
(65, 'EASSE243095', 'ILOABUCHI CHIGOZIE MC KINGSLEY', 'JSS1B', '7', '5', '6', '6', '7', '', '7', '10', '9', '', '5', '7', '4', '', '', '6', '2'),
(66, 'EASSE243132', 'IWUOHA CHIBUIKE GODSWILL', 'JSS1B', '10', '10', '6', '10', '8', '', '7', '8', '10', '', '5', '9', '5', '', '', '5', '7'),
(67, 'EASSE243146', 'JAMES DIVINE CHIEMERIE', 'JSS1B', '2', '3', '2', '6', '6', '', '5', '3', '6', '', '2', '5', '3', '', '', '7', '2'),
(68, 'EASSE243020', 'MADU CHINEDUM TESTIMONY', 'JSS1B', '8', '6', '4', '6', '8', '', '5', '7', '9', '', '7', '6', '5', '', '', '6', '4'),
(69, 'EASSE242918', 'MADUAGWU GOODNESS IFEANYICHUKWU', 'JSS1B', '9', '8', '5', '7', '5', '', '1', '6', '6', '', '8', '5', '7', '', '', '5', '3'),
(70, 'EASSE243040', 'NNAEMEKA SOPURUCHI PRAISE', 'JSS1B', '6', '6', '4', '9', '7', '', '6', '9', '5', '', '7', '7', '6', '', '', '7', '6'),
(71, 'EASSE243092', 'NNAMOKO EMMANUEL CHUKWUEBUKA', 'JSS1B', '4', '6', '3', '6', '5', '', '7', '7', '9', '', '6', '8', '8', '', '', '7', '6'),
(72, 'EASSE242949', 'NWODO SAMUEL CHIMKWESIRI', 'JSS1B', '10', '8', '5', '7', '7', '', '7', '9', '9', '', '8', '6', '4', '', '', '5', '6'),
(73, 'EASSE242987', 'OBAH SHALOM SOCHIKAMUMA', 'JSS1B', '1', '4', '3', '6', '5', '', '4', '5', '5', '', '3', '4', '2', '', '', '3', '6'),
(74, 'EASSE243137', 'OFOHA DIVINE GRACE AMARACHI', 'JSS1B', '8', '6', '3', '6', '6', '', '5', '7', '6', '', '7', '4', '3', '', '', '6', '3'),
(75, 'EASSE243085', 'OKAFOR EKPEREAMAKA JENNIFER', 'JSS1B', '7', '8', '5', '9', '9', '', '8', '6', '6', '', '9', '8', '8', '', '', '7', '4'),
(76, 'EASSE242898', 'OKECHUKWU ABUNDANCE MMESOMA', 'JSS1B', '', '', '', '', '', '', '', '10', '', '', '8', '', '6', '', '', '', ''),
(77, 'EASSE242931', 'OKOLI UDODIRIM ALVIN', 'JSS1B', '5', '5', '6', '8', '6', '', '7', '7', '8', '', '6', '5', '6', '', '', '7', '2'),
(78, 'EASSE243026', 'OKUEFUNA  DANIEL', 'JSS1B', '2', '5', '4', '4', '4', '', '5', '7', '8', '', '5', '1', '3', '', '', '7', '2'),
(79, 'EASSE243114', 'OKWUDILI AMARACHI DIVINEGRACE', 'JSS1B', '6', '2', '3', '4', '3', '', '3', '3', '3', '', '3', '2', '6', '', '', '5', '2'),
(80, 'EASSE242976', 'ORJIKALU PROSPER IKECHUKWU', 'JSS1B', '2', '4', '4', '5', '6', '', '4', '5', '5', '', '6', '7', '5', '', '', '4', '1'),
(81, 'EASSE243117', 'ROLAND DANIEL MUNACHI', 'JSS1B', '7', '9', '6', '8', '8', '', '7', '8', '9', '', '6', '7', '5', '', '', '9', '7'),
(82, 'EASSE242941', 'UDENYI TOCHUKWU MIRACLE', 'JSS1B', '4', '4', '4', '6', '3', '', '6', '8', '2', '', '6', '3', '4', '', '', '5', '2'),
(83, 'EASSE242924', 'UGWU COLLINS KOSISOCHUKWU', 'JSS1B', '8', '5', '5', '8', '6', '', '5', '7', '3', '', '6', '4', '2', '', '', '6', '2'),
(84, 'EASSE243015', 'OGBUI DESIRED CHIDIYEREM', 'JSS1B', '9', '9', '7', '9', '9', '', '8', '8', '9', '', '9', '8', '10', '', '', '7', '6'),
(85, 'EASSE243165', 'NWEKE  PROMISE CHIBUIKE', 'JSS1B', '4', '4', '2', '7', '3', '', '', '7', '6', '', '2', '4', '3', '', '', '3', ''),
(86, 'EASSE242900', 'AGU MUNACHIMSO ANASTECIA', 'JSS1C', '10', '7', '4', '7', '8', '', '3', '6', '8', '', '8', '7', '8', '', '', '7', '5'),
(87, 'EASSE243052', 'AGUOMA GIDEON CHIDUBEM', 'JSS1C', '3', '2', '5', '2', '5', '', '5', '6', '5', '', '4', '5', '2', '', '', '2', '2'),
(88, 'EASSE243051', 'AMAECHINA  OLUEBUBE EMMANUEL', 'JSS1C', '3', '6', '4', '9', '9', '', '7', '10', '7', '', '7', '7', '7', '', '', '6', '3'),
(89, 'EASSE242929', 'ANI PRAISE CHINEMEREM', 'JSS1C', '10', '9', '10', '10', '9', '', '7', '9', '8', '', '8', '10', '9', '', '', '7', '4'),
(90, 'EASSE242910', 'ANYAECHE KAMSIYOCHUKWU EMMANUEL', 'JSS1C', '9', '5', '6', '8', '8', '', '6', '7', '9', '', '6', '8', '7', '', '', '5', '6'),
(91, 'EASSE242887', 'BERNARD UDE CHIMAMANDA AMAZING GRACE', 'JSS1C', '7', '7', '4', '7', '5', '', '', '9', '6', '1', '7', '7', '5', '', '', '5', '4'),
(92, 'EASSE243110', 'CHIBUZOR OTU VICTORY IZUCHUKWU', 'JSS1C', '2', '4', '4', '5', '5', '', '2', '5', '4', '', '5', '4', '5', '', '', '4', '4'),
(93, 'EASSE242923', 'CHIME-ANI EBUBE GREAT', 'JSS1C', '6', '7', '6', '10', '8', '', '5', '8', '9', '', '7', '6', '6', '', '', '6', '3'),
(94, 'EASSE243075', 'CHUKWUEMEKA CHIMDALU JOSHUA', 'JSS1C', '2', '2', '1', '6', '5', '', '3', '5', '3', '', '2', '5', '3', '', '', '5', '2'),
(95, 'EASSE243098', 'EDEZE CHUKWUEBUKA WISDOM', 'JSS1C', '9', '9', '6', '8', '6', '', '8', '8', '7', '', '10', '9', '9', '', '', '8', '3'),
(96, 'EASSE243091', 'EJIKE DERRICK EZICHI', 'JSS1C', '10', '6', '7', '8', '7', '', '9', '8', '10', '', '6', '6', '9', '', '', '7', '5'),
(97, 'EASSE243099', 'EJIKE EBUBECHUKWU SUCCESS', 'JSS1C', '6', '7', '7', '10', '7', '', '8', '10', '9', '', '7', '7', '5', '', '', '6', '5'),
(98, 'EASSE242959', 'EKPEH OLUEBUBE FAVOUR', 'JSS1C', '7', '7', '7', '9', '8', '', '5', '8', '8', '', '8', '6', '9', '', '', '5', '3'),
(99, 'EASSE243036', 'EZE CHIMAOBI GOSPEL', 'JSS1C', '3', '5', '3', '4', '3', '', '5', '4', '4', '', '4', '2', '3', '', '', '4', '4'),
(100, 'EASSE242953', 'EZEIGWE PRECIOUS CHIDALU', 'JSS1C', '7', '5', '6', '7', '6', '', '7', '6', '3', '', '6', '4', '1', '', '', '5', '5'),
(101, 'EASSE243096', 'ILOABUCHI CHIMAOBI KINGSLEY', 'JSS1C', '7', '7', '4', '7', '9', '', '5', '10', '6', '', '5', '7', '3', '', '', '4', '4'),
(102, 'EASSE242994', 'NJEZE CHIDALU EMMANUEL', 'JSS1C', '4', '3', '4', '4', '2', '', '2', '6', '4', '', '2', '3', '2', '', '', '4', '4'),
(103, 'EASSE243078', 'NNAJI LIFTED MUNACHIMSO', 'JSS1C', '6', '5', '1', '5', '2', '', '5', '1', '4', '', '6', '4', '2', '', '', '4', '4'),
(104, 'EASSE243050', 'NNAMCHI AMARACHI GOODNESS', 'JSS1C', '8', '7', '3', '8', '9', '', '7', '9', '5', '', '4', '7', '6', '', '', '5', '5'),
(105, 'EASSE242947', 'NWANKWO IFECHUKWU PAUL', 'JSS1C', '5', '3', '3', '5', '5', '', '4', '7', '4', '', '3', '4', '2', '', '', '6', '1'),
(106, 'EASSE242905', 'NWOBODO CHIAGOZIE HENRY', 'JSS1C', '8', '8', '8', '9', '10', '', '7', '8', '9', '', '8', '6', '8', '', '', '6', '6'),
(107, 'EASSE243056', 'NYIA GODWIN CHIAZOKAM', 'JSS1C', '5', '3', '3', '', '3', '', '3', '4', '1', '', '2', '3', '1', '', '', '4', '1'),
(108, 'EASSE243112', 'OBI KEIVIN IFECHUKWU', 'JSS1C', '6', '5', '2', '9', '7', '', '1', '3', '3', '', '7', '4', '3', '', '', '', '4'),
(109, 'EASSE242945', 'OFUNWA BEATRICE OLUCHUKWU', 'JSS1C', '8', '9', '6', '8', '8', '', '8', '8', '7', '', '8', '6', '7', '', '', '5', '3'),
(110, 'EASSE243014', 'OGBODO JOSHUA AKACHUKWU', 'JSS1C', '5', '3', '5', '5', '4', '', '5', '6', '3', '', '3', '3', '3', '', '', '2', '3'),
(111, 'EASSE242948', 'OKAFOR CHIDIUTO DIVINE FAVOUR', 'JSS1C', '8', '8', '7', '10', '7', '', '8', '8', '9', '', '9', '8', '9', '', '', '7', '5'),
(112, 'EASSE243153', 'OKAFOR CHIZITEREM SUCCESS', 'JSS1C', '8', '9', '7', '9', '10', '', '7', '8', '8', '', '8', '8', '8', '', '', '6', '6'),
(113, 'EASSE242967', 'OKANI UZODIMMA BLESSING', 'JSS1C', '8', '5', '7', '9', '9', '', '5', '7', '6', '', '4', '7', '4', '', '', '7', '6'),
(114, 'EASSE243017', 'OKECHUKWU MARVELLOUS OLUEBUBE', 'JSS1C', '8', '8', '6', '8', '9', '', '7', '9', '6', '', '8', '6', '5', '', '', '4', '6'),
(115, 'EASSE242932', 'OKONKWO PRAISEGOD CHINEDU', 'JSS1C', '9', '7', '5', '7', '6', '', '7', '9', '8', '', '5', '9', '6', '', '', '6', '2'),
(116, 'EASSE243145', 'OKONKWO CHIMOBI SAMSON', 'JSS1C', '4', '3', '4', '6', '9', '', '5', '7', '5', '', '8', '3', '4', '', '', '6', '4'),
(117, 'EASSE242911', 'OKPALEKE DAVID CHINEDUM', 'JSS1C', '3', '5', '3', '3', '3', '', '6', '5', '3', '', '1', '4', '3', '', '', '5', '3'),
(118, 'EASSE242890', 'OKPARAOBI JOSEPH AKACHUKWU', 'JSS1C', '9', '4', '5', '10', '9', '', '8', '6', '10', '', '7', '6', '5', '', '', '7', '3'),
(119, 'EASSE243139', 'ONAH SOCHIMA CALEB', 'JSS1C', '7', '4', '6', '5', '4', '', '4', '6', '5', '', '7', '4', '1', '', '', '5', '5'),
(120, 'EASSE242981', 'ONYIA  JOHN  CHUKWUEMEKA', 'JSS1C', '5', '4', '5', '6', '6', '', '6', '5', '5', '', '4', '8', '3', '', '', '7', '2'),
(121, 'EASSE243076', 'OWUNEZI CHINEDU JOACHIN', 'JSS1C', '2', '2', '3', '5', '5', '', '6', '3', '4', '', '4', '3', '4', '', '', '3', '3'),
(122, 'EASSE242944', 'OZOATUEGBU DAVID SOCHIMA', 'JSS1C', '10', '9', '8', '10', '10', '', '8', '8', '9', '', '7', '10', '10', '', '', '9', '9'),
(123, 'EASSE243046', 'SUNDAY PROSPER EBUBECHUKWU', 'JSS1C', '6', '10', '8', '8', '9', '', '7', '8', '9', '', '5', '7', '6', '', '', '6', '6'),
(124, 'EASSE243122', 'UCHEONYE CHINEMEREM DAVID', 'JSS1C', '7', '5', '3', '8', '10', '', '7', '6', '2', '', '5', '8', '5', '', '', '4', '4'),
(125, 'EASSE242928', 'UMELO CHIOMA SUCCESS IFEDINMA', 'JSS1C', '5', '7', '4', '7', '4', '', '2', '7', '3', '', '4', '7', '7', '', '', '5', '5'),
(126, 'EASSE243027', 'WISDOM GODSPRAISE MUNACHI', 'JSS1C', '6', '6', '7', '9', '6', '', '9', '7', '7', '', '3', '7', '7', '', '', '4', '6'),
(127, 'EASSE243062', 'CHUKWUKA EMMANUEL CHINEDU', 'JSS1C', '8', '5', '5', '6', '8', '', '4', '10', '7', '', '6', '8', '6', '', '', '7', '4'),
(128, 'EASSE000002', 'AYOGU CHIBUIKEM', 'JSS1C', '4', '3', '3', '5', '4', '', '3', '2', '3', '', '5', '2', '3', '', '', '4', '2'),
(129, 'EASSE242982', 'ABUGU CHIDUBEM LEO', 'JSS1D', '9', '8', '7', '7', '8', '', '7', '6', '6', '', '9', '8', '6', '', '', '5', '7'),
(130, 'EASSE243055', 'AGBO UCHENNA EMMANUEL', 'JSS1D', '4', '9', '6', '6', '7', '', '6', '5', '6', '', '7', '6', '6', '', '', '7', '1'),
(131, 'EASSE242985', 'AGO IHUOMA GIFT', 'JSS1D', '8', '7', '5', '8', '6', '', '6', '10', '8', '', '8', '5', '4', '', '', '5', '6'),
(132, 'EASSE242965', 'AGU FESOCHI HENRY', 'JSS1D', '9', '5', '6', '8', '8', '3', '5', '6', '7', '', '7', '4', '4', '', '', '6', '4'),
(133, 'EASSE243053', 'AGU KINGSLEY CHIBUIKEM', 'JSS1D', '4', '5', '5', '5', '5', '', '4', '', '5', '', '', '2', '', '', '', '4', '3'),
(134, 'EASSE242891', 'AKASE CHISOM CHISOM', 'JSS1D', '7', '5', '2', '5', '6', '', '5', '3', '5', '', '5', '4', '4', '', '', '5', '2'),
(135, 'EASSE243127', 'ANEKE GODSWILL CHINONSO', 'JSS1D', '3', '6', '3', '5', '8', '', '5', '2', '6', '', '5', '3', '', '', '', '4', '5'),
(136, 'EASSE243111', 'ANEKE OLUEBUBE ANTHONY', 'JSS1D', '4', '4', '7', '8', '5', '', '6', '5', '4', '', '6', '5', '4', '6', '', '4', '2'),
(137, 'EASSE243083', 'ANIKE ESTHER MUNACHIMSO', 'JSS1D', '6', '7', '5', '7', '7', '', '8', '7', '8', '', '8', '7', '5', '', '', '7', '2'),
(138, 'EASSE242882', 'ANIOKO NZUBECHUKWU GODSWILL', 'JSS1D', '10', '5', '9', '8', '8', '', '7', '6', '7', '', '7', '7', '6', '', '', '6', '4'),
(139, 'EASSE243021', 'ANTHONY CHIAGOZIEM REGINALD', 'JSS1D', '5', '6', '1', '4', '3', '', '5', '3', '4', '', '2', '', '3', '', '', '4', '1'),
(140, 'EASSE243049', 'CHINWEZE CHIZARAMEKPERE ADORAMUS', 'JSS1D', '8', '8', '6', '8', '7', '', '7', '8', '7', '', '6', '8', '6', '', '', '8', '5'),
(141, 'EASSE243104', 'EMMA-EFOBI WISDOM ZIKORA', 'JSS1D', '4', '8', '7', '5', '6', '', '7', '10', '6', '', '7', '8', '4', '', '', '6', '3'),
(142, 'EASSE242950', 'ENEBECHI GODSWILL EJIKEME', 'JSS1D', '4', '5', '5', '7', '5', '', '3', '8', '8', '', '9', '8', '5', '', '', '5', '2'),
(143, 'EASSE242893', 'ENEZE DANIEL CHUKWUKA', 'JSS1D', '7', '4', '4', '6', '5', '', '6', '7', '7', '', '7', '5', '5', '', '', '5', '4'),
(144, 'EASSE243028', 'EZE CHINAZA EMMANUELLA', 'JSS1D', '4', '8', '8', '8', '5', '', '6', '6', '7', '', '5', '6', '6', '', '', '6', '7'),
(145, 'EASSE242933', 'EZEANYA EBUBECHUKWU DIVINE FAVOUR', 'JSS1D', '6', '10', '6', '8', '8', '', '5', '5', '8', '', '7', '8', '4', '', '', '4', '2'),
(146, 'EASSE243033', 'EZEOKOLI OWEN MUNACHI', 'JSS1D', '8', '9', '9', '8', '10', '', '8', '8', '9', '', '7', '10', '8', '', '', '7', '10'),
(147, 'EASSE242894', 'MADUEGBUNA CHIMDINDU FRANKLIN', 'JSS1D', '5', '2', '5', '4', '5', '', '5', '9', '3', '', '4', '6', '3', '', '', '5', '4'),
(148, 'EASSE242930', 'MADUKWE ISAAC IKECHIKA', 'JSS1D', '8', '4', '6', '7', '8', '', '4', '5', '7', '', '6', '6', '2', '', '', '6', '5'),
(149, 'EASSE242946', 'NNAJI  REJOICE IFECHUKWU', 'JSS1D', '8', '8', '6', '8', '8', '', '6', '7', '8', '', '8', '9', '6', '', '', '5', '4'),
(150, 'EASSE242915', 'NNAJIOFOR VALENTINE KAMSIYOCHUKWU', 'JSS1D', '8', '4', '5', '4', '7', '', '3', '6', '4', '', '7', '4', '4', '', '', '5', '5'),
(151, 'EASSE243041', 'NWANKWOR EMMANUEL NNANNA', 'JSS1D', '7', '9', '7', '8', '8', '', '7', '7', '9', '', '8', '10', '8', '', '', '5', '5'),
(152, 'EASSE242906', 'NWOBODO NGOZIKA STEPHANIE', 'JSS1D', '9', '7', '5', '9', '7', '', '8', '10', '8', '', '7', '7', '3', '', '', '6', '5'),
(153, 'EASSE243045', 'OBIANO PROSPER RAPURUCHUKWU', 'JSS1D', '3', '3', '5', '5', '3', '', '5', '4', '3', '', '5', '4', '4', '', '', '7', '2'),
(154, 'EASSE243119', 'ODOH CHIAGOZIE VINCENT', 'JSS1D', '9', '8', '6', '7', '8', '', '7', '8', '9', '', '7', '9', '5', '', '', '5', '4'),
(155, 'EASSE242916', 'OGAH REJOICE OLUEBUBE', 'JSS1D', '8', '9', '7', '10', '9', '', '8', '9', '9', '', '8', '8', '6', '', '', '5', '7'),
(156, 'EASSE242951', 'OKAFOR CHIAGOZIE MIRACLE', 'JSS1D', '3', '4', '7', '7', '5', '', '4', '7', '4', '', '5', '5', '5', '', '', '7', '1'),
(157, 'EASSE242971', 'OKAFOR EMMANUEL CHIEMERIE', 'JSS1D', '9', '7', '5', '6', '6', '', '7', '8', '5', '', '6', '5', '7', '', '', '6', '3'),
(158, 'EASSE243086', 'OKAFOR WISDOM CHIDERA', 'JSS1D', '4', '9', '4', '5', '8', '', '6', '7', '5', '', '8', '7', '4', '', '', '6', '3'),
(159, 'EASSE242970', 'OKECHUKWU CHIDERA DOMINION', 'JSS1D', '4', '6', '3', '3', '3', '', '3', '3', '4', '', '6', '1', '2', '', '', '7', '2'),
(160, 'EASSE242939', 'OKEZIE MMESOMA GLORIA', 'JSS1D', '3', '7', '5', '6', '8', '', '4', '7', '6', '', '6', '6', '6', '', '', '6', '3'),
(161, 'EASSE243034', 'OKONKWO LOVELY CHINEMEREM', 'JSS1D', '9', '8', '9', '10', '9', '', '7', '9', '9', '', '6', '10', '10', '', '', '5', '7'),
(162, 'EASSE243107', 'OKORIE-KALU CHIDIOMIMI JOSEPH', 'JSS1D', '9', '8', '5', '7', '9', '', '7', '9', '7', '', '6', '5', '6', '', '', '5', '4'),
(163, 'EASSE243048', 'OKOYE MUNACHIMSO ESTHER', 'JSS1D', '6', '7', '4', '6', '5', '', '5', '', '5', '', '', '2', '', '', '', '6', '3'),
(164, 'EASSE243094', 'OKPALA ONYEDIKA FRANCIS', 'JSS1D', '4', '7', '5', '4', '4', '', '2', '7', '6', '', '3', '6', '1', '', '', '6', '2'),
(165, 'EASSE243109', 'OSITA EMMANUELLA NMACHUKWU', 'JSS1D', '5', '3', '6', '7', '8', '', '6', '8', '8', '', '4', '8', '6', '', '', '6', '4'),
(166, 'EASSE243035', 'OZOCHI PRECIOUS UCHENNA', 'JSS1D', '5', '3', '5', '5', '4', '', '5', '7', '3', '', '6', '6', '3', '', '', '3', '5'),
(167, 'EASSE242921', 'UGOCHUKWU GLORY CHIDIMMA', 'JSS1D', '9', '5', '6', '10', '7', '', '6', '10', '6', '', '3', '7', '7', '', '', '7', '4'),
(168, 'EASSE242926', 'OHIRI MIRABEL CHUKWUZITALU', 'JSS1D', '8', '9', '5', '7', '7', '', '6', '7', '7', '', '6', '5', '7', '', '', '3', '5'),
(169, 'EASSE243160', 'ONWUAMAEZE  IFENNA COLLINS', 'JSS1D', '3', '2', '2', '4', '4', '', '4', '4', '3', '', '5', '4', '3', '', '', '2', '3'),
(170, 'EASSE243140', 'ABANIHI HELEN OLUCHUKWU', 'JSS1E', '3', '5', '2', '7', '6', '', '6', '6', '5', '', '7', '5', '4', '', '', '4', '2'),
(171, 'EASSE243059', 'AGBO COLLINS KAMSIYOCHUKWU', 'JSS1E', '6', '2', '4', '9', '7', '', '5', '5', '6', '', '5', '5', '4', '', '', '5', '4'),
(172, 'EASSE243126', 'ANEKE WISDOM ONYEDIKACHUKWU', 'JSS1E', '5', '3', '2', '7', '4', '', '5', '5', '3', '', '3', '2', '2', '', '', '6', '1'),
(173, 'EASSE243084', 'ANIKE DEBORAH CHISOM', 'JSS1E', '9', '5', '2', '7', '7', '', '4', '9', '6', '', '7', '6', '3', '', '', '6', '5'),
(174, 'EASSE243144', 'ASOGWA CHINEMEREM PRAISE', 'JSS1E', '8', '7', '6', '9', '9', '', '6', '7', '7', '', '7', '9', '6', '', '', '5', '6'),
(175, 'EASSE243070', 'CHIBUZO GRATEFUL CHIMEMELA', 'JSS1E', '7', '6', '4', '8', '7', '', '4', '9', '7', '', '2', '3', '4', '', '', '4', '6'),
(176, 'EASSE242972', 'CHIMEUDE CHIMAMANDA FAVOUR', 'JSS1E', '4', '1', '3', '8', '6', '', '4', '6', '6', '', '4', '3', '2', '', '', '4', '1'),
(177, 'EASSE242973', 'CHUKWUMAEMAEZE MUNACHIM PRECIOUS', 'JSS1E', '9', '5', '5', '9', '7', '', '7', '9', '6', '', '7', '6', '', '', '', '7', '4'),
(178, 'EASSE243001', 'CHUKWUKA KINGSLEY CHUKWUEBUKA', 'JSS1E', '5', '5', '5', '6', '6', '', '6', '3', '5', '', '3', '5', '4', '', '', '5', '3'),
(179, 'EASSE243134', 'CHUKWUMA IZUCHUKWU SAMUEL', 'JSS1E', '5', '4', '1', '5', '6', '', '', '3', '3', '', '8', '3', '1', '', '', '6', ''),
(180, 'EASSE242989 ', 'CHURCHILL NICOLE CHIBUEYINM', 'JSS1E', '9', '4', '5', '6', '7', '', '7', '10', '7', '', '6', '7', '3', '', '', '7', '4'),
(181, 'EASSE243058', 'EDEH KOSISOCHUKWU JOAN', 'JSS1E', '7', '6', '2', '10', '6', '', '7', '', '7', '', '7', '6', '', '', '', '5', '4'),
(182, 'EASSE243012', 'EGBO IFECHUKWU DANIEL', 'JSS1E', '7', '1', '2', '5', '4', '', '5', '6', '2', '', '3', '1', '3', '', '', '3', '2'),
(183, 'EASSE232852', 'EJEAGWU CHIEMERIE VICTOR', 'JSS1E', '3', '3', '2', '2', '4', '', '2', '4', '2', '', '3', '3', '1', '', '', '1', '4'),
(184, 'EASSE243074', 'EZEH MIRACLE UGOCHUKWU', 'JSS1E', '6', '4', '4', '3', '4', '', '3', '4', '5', '', '5', '4', '4', '', '', '6', '4'),
(185, 'EASSE242884', 'IKECHI BELOVED NNEOMA', 'JSS1E', '8', '7', '6', '8', '9', '', '9', '9', '9', '', '9', '10', '7', '', '', '5', '8'),
(186, 'EASSE242998', 'IROH EZINNE PRECIOUS', 'JSS1E', '9', '6', '4', '9', '9', '', '7', '7', '9', '', '8', '7', '6', '', '', '6', '3'),
(187, 'EASSE243009', 'IZUCHUKWU-MBA CHISOM FAVOUR', 'JSS1E', '9', '2', '5', '8', '8', '', '6', '10', '8', '', '6', '10', '6', '', '', '8', '8'),
(188, 'EASSE242885', 'MADUABUCHI OLIVIA AMARACHUKWU', 'JSS1E', '9', '6', '9', '9', '8', '', '6', '8', '9', '', '5', '9', '8', '', '', '8', '5'),
(189, 'EASSE242964', 'NKACHUKWU ONYEDIKACHUKWU CONFIDENCE', 'JSS1E', '4', '5', '7', '7', '8', '', '7', '7', '7', '', '7', '6', '3', '', '', '6', '4'),
(190, 'EASSE243087', 'NNAM IFECHUKWU MARK-MORITZ', 'JSS1E', '7', '3', '2', '7', '5', '', '5', '6', '6', '', '5', '5', '5', '', '', '5', '3'),
(191, 'EASSE243079', 'NNAMANI AKACHUKWU SAMUEL', 'JSS1E', '10', '4', '6', '7', '9', '', '6', '10', '9', '', '7', '9', '7', '', '', '6', '6'),
(192, 'EASSE243072', 'NNAMANI BRIGHT CHIMEREMEZE', 'JSS1E', '2', '4', '3', '7', '4', '', '4', '6', '2', '', '2', '2', '4', '', '', '7', '3'),
(193, 'EASSE243082', 'NSOFOR CHUKWUEMERIE EMMANUEL', 'JSS1E', '1', '6', '2', '3', '3', '', '4', '2', '5', '', '3', '4', '3', '', '', '1', '2'),
(194, 'EASSE242990', 'NWABUEZE DAVID IZUCHUKWU', 'JSS1E', '7', '6', '4', '9', '8', '', '7', '6', '6', '', '7', '7', '3', '', '', '7', '6'),
(195, 'EASSE243000', 'NWAFOR ESTHER CHIOMA', 'JSS1E', '3', '4', '4', '8', '5', '', '4', '1', '6', '', '4', '6', '2', '', '', '6', '4'),
(196, 'EASSE242995', 'OBAH FAVOUR ADAOBI', 'JSS1E', '4', '6', '8', '6', '9', '', '8', '8', '7', '', '7', '7', '5', '', '', '3', '7'),
(197, 'EASSE243073', 'OBI FAVOUR CHISOM', 'JSS1E', '7', '5', '5', '6', '9', '', '5', '6', '6', '', '5', '8', '4', '', '', '8', '7'),
(198, 'EASSE242991', 'OBINNA KAMSIYOCHUKWU VICTOR', 'JSS1E', '6', '5', '8', '7', '8', '', '5', '8', '6', '', '5', '4', '5', '', '', '6', '4'),
(199, 'EASSE243013', 'ODOH AKACHUKWU VICTOR', 'JSS1E', '3', '4', '2', '6', '5', '', '3', '5', '3', '', '5', '4', '2', '', '', '2', '2'),
(200, 'EASSE243007', 'OKEKE CHIOMA EMMANUELLA', 'JSS1E', '8', '4', '4', '8', '6', '', '5', '8', '6', '', '7', '4', '7', '', '', '6', '7'),
(201, 'EASSE243077', 'OKONKWO IFECHUKWU EMMANUEL', 'JSS1E', '6', '5', '7', '6', '4', '', '7', '7', '5', '', '6', '3', '4', '', '', '2', '2'),
(202, 'EASSE242962', 'OKORIE CHIMAOBI VICTOR', 'JSS1E', '8', '3', '3', '8', '7', '', '3', '4', '5', '', '4', '6', '2', '', '', '6', '3'),
(203, 'EASSE243063', 'OKORO CHIJINDU OLAEDO ANNALUCIA', 'JSS1E', '9', '8', '5', '9', '10', '', '6', '8', '8', '', '6', '10', '7', '', '', '7', '10'),
(204, 'EASSE243081', 'ONUH EMMANUEL CHUKWUDALU', 'JSS1E', '7', '4', '7', '8', '7', '', '4', '8', '5', '', '5', '5', '2', '', '', '6', '3'),
(205, 'EASSE243061', 'ONYENACHIYA CHIMELA SAMUEL', 'JSS1E', '5', '4', '5', '7', '7', '', '7', '7', '7', '', '5', '6', '2', '', '', '8', '5'),
(206, 'EASSE243057', 'ONYENEMEZU PRECIOUS CHIAMAKA', 'JSS1E', '7', '7', '7', '7', '7', '', '5', '8', '7', '', '4', '7', '5', '', '', '7', '7'),
(207, 'EASSE242999', 'OLIVIA OSINACHI', 'JSS1E', '8', '4', '5', '9', '9', '', '7', '9', '9', '', '6', '8', '7', '', '', '7', '3'),
(208, 'EASSE243010', 'OZOILO KANYITOCHUKWU PRAISE', 'JSS1E', '10', '7', '8', '10', '9', '', '7', '8', '9', '', '4', '6', '7', '', '', '4', '6'),
(209, 'EASSE243003', 'UGWU DIVINE SOMTOCHUKWU', 'JSS1E', '6', '8', '6', '7', '10', '', '4', '8', '8', '', '8', '6', '9', '', '', '7', '8'),
(210, 'EASSE243005', 'CHUKWUKERE MIRIAM CHINECHEREM', 'JSS1E', '6', '3', '3', '7', '8', '', '5', '9', '3', '', '5', '8', '8', '', '', '5', '2'),
(211, 'EASSE243168', 'ENYI  DAVID EKENECHUKWU', 'JSS1E', '3', '2', '1', '5', '6', '', '3', '4', '2', '', '2', '4', '2', '', '', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `subject_of_the_day`
--

CREATE TABLE `subject_of_the_day` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_of_the_day`
--

INSERT INTO `subject_of_the_day` (`id`, `title`, `subject`, `date`) VALUES
(1, 'subject_1', 'Home Economics', '2024-05-22 02:29:27'),
(2, 'subject_2', 'CCA', '2024-05-22 02:29:27'),
(3, 'subject_3', 'CRS', '2024-05-22 02:29:27'),
(4, 'subject_4', 'Agric Science', '2024-05-22 02:29:27'),
(5, 'subject_5', 'Security Education', '2024-05-22 02:29:27'),
(6, 'subject_6', 'History', '2024-05-22 02:29:27'),
(7, 'subject_7', 'Igbo', '2024-05-22 02:29:27'),
(8, 'subject_8', 'English Language', '2024-05-22 02:29:27'),
(9, 'subject_9', '', '2024-05-22 02:29:27'),
(10, 'subject_10', '', '2024-05-22 02:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` bigint(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `term`, `date`) VALUES
(1, '1st Term', '2024-05-21 17:40:08'),
(2, '2nd Term', '2024-05-21 17:40:08'),
(3, '3rd Term', '2024-05-21 17:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_term`
--
ALTER TABLE `session_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_of_the_day`
--
ALTER TABLE `subject_of_the_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session_term`
--
ALTER TABLE `session_term`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `subject_of_the_day`
--
ALTER TABLE `subject_of_the_day`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
