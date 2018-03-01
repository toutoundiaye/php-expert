<?php
/**
 * Summary for PetShop
 * @author Toutou Ndiaye <thiesescale@yahoo.fr>
 */
namespace Toutou\doc;
use Toutou\doc\people\Person;
use Toutou\doc\business\Stock;

/**
 * Class PetShop
 *
 * Manage each component of the shop
 *
 * @author Toutou Ndiaye <thiesescale@yahoo.fr>
 * @license MIT
 */
class PetShop
{
    /**
     * @var Person the person you can blame
     */
    private $owner;

    /**
     * @var Person[] people you take money
     */
    private $customers;

    /**
     * short description ( < 50ch)
     *
     * long and multi-line description
     *
     * @param string $name description of param role
     * @return business\Stock the specified stock
     */
    public function getStock($name)
    {
        //injection de language
        //$html = '<h1>coucou<p>du html</p></h1>';
        //$sql = 'SELECT p.* FROM Pet p WHERE p.name = "Mirza"';
        //Todo: implement this method
        return new Stock();
    }

    public function getConfig()
    {
        $databaseParam = [];
        $config = yaml_parse_file(__DIR__.'./../config/database.yml');
        $databaseParam[0] = $config['dbconf']['dbhost'];
        $databaseParam[1] = $config['dbconf']['dbport'];
        $databaseParam[2] = $config['dbconf']['dbuser'];
        $databaseParam[3] = $config['dbconf']['dbpass'];
        return $databaseParam;
    }
}

