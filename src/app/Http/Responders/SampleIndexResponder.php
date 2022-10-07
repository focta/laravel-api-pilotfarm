<?php

namespace App\Http\Responders;

use Illuminate\Http\Response;
//use Illuminate\Contracts\View\Factory AS ViewFactory;

class SampleIndexResponder
{
    protected $response;
//    protected $view;

//    public function __construct(Response $response, ViewFactory $view)
//    {
//        $this->response = $response;
//        $this->view = $view;
//    }

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @param $data
     * @return Response
     */
    public function response($data): Response
    {
        if (empty($data)) {
            $this->response->setStatusCode(Response::HTTP_NOT_FOUND);
            $this->response->setContent(
                $this->view->make('errors.404')
            );
            return $this->response;
        }

        $this->response->setContent(
            view('sample.index', ['data' => $data])
        );
        return $this->response;
    }
}
