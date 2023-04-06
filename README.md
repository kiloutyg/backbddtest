# backbddtest
semaine avril

Pour installation sur windows, avec wampserver:

1 - Ajouter le projet dans le répertoire www de wamp
2 - Créer dans votre bdd (de préférence PhpMyAdmin) avec le nom 'bddtest'
3 - Éxécuter ce script 

    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";


    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
    /*!40101 SET NAMES utf8mb4 */;

    CREATE TABLE `users` (
      `id` int(6) UNSIGNED NOT NULL,
      `name` varchar(30) NOT NULL,
      `first_name` varchar(30) NOT NULL,
      `date_of_birth` date NOT NULL,
      `astrological_sign` varchar(20) NOT NULL,
      `password` varchar(30) NOT NULL,
      `complex_password` varchar(30) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `users`
      ADD PRIMARY KEY (`id`);

    ALTER TABLE `users`
      MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
    COMMIT;

    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
    
4 - Avoir un user avec le nom d'utilisateur 'root' et mot de passe 'root' ayant les droits sur cette base
5 - Le Projet est opérationnel
    
