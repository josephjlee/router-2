<?php
/**
 * Created by PhpStorm.
 * User: Doka
 * Date: 28/03/2019
 * Time: 09:58
 */

namespace Test;


class Kadokweb
{
    /**
     * Kadokweb constructor.
     */
    public function __construct()
    {
        $url = BASE;

        echo "<h1>Router @KadokWeb</h1>";
        echo "<nav>
            <a href='{$url}'>Home</a>
            <a href='{$url}/edit/" . rand(44, 244) . "'>Edit</a>
            <a href='{$url}/error/'>Error</a>
        </nav>";
    }

    /**
     * @param array $data
     */
    public function home(array $data): void
    {
        echo "<h3>", __METHOD__, "::", $_SERVER["REQUEST_METHOD"], "</h3><hr>";
        echo "<pre>", print_r($data, true), "</pre>";
    }

    /**
     * @param array $data
     */
    public function edit(array $data): void
    {
        echo "<h3>", __METHOD__, "::", $_SERVER["REQUEST_METHOD"], "</h3><hr>";

        echo "<form name='kadokweb' method='post' enctype='multipart/form-data'>
            <input name=\"first_name\" value=\"Doka\">
            <input name=\"last_name\" value=\"B. Silva\">
            <input name=\"email\" value=\"doka@kadokweb.com.br\">
            <button>@CoffeeCode</button>
        </form>";

        echo "<pre>", print_r($data, true), "</pre>";
    }

    /**
     * @param array $data
     */
    public function notfound(array $data): void
    {
        echo "<h3>Whoops!</h3>", "<pre>", print_r($data, true), "</pre>";
    }

    public function admin(array $data): void
    {
        echo "<h3>Admin Group:</h3>", "<pre>", print_r($data, true), "</pre>";
    }
}