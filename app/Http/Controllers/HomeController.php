<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Psr\Log\LoggerInterface;

class HomeController extends Controller
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * HomeController constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function index()
    {
        $this->logger->info("Info logging",['hello'=>"World"]);
        return 'You log is saved.';
    }
}
