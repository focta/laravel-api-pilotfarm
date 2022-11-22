<?php
declare(strict_types=1);

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Domain\SampleIndexDomain as Domain;

use App\Http\Responders\SampleIndexResponder as Responder;

class SampleIndexAction extends Controller
{
    protected $Domain;
    protected $Responder;

    public function __construct(
        Domain    $Domain,
        Responder $Responder
    )
    {
        $this->Domain = $Domain;
        $this->Responder = $Responder;
    }

    /**
     * @param Request $request
     * @return Response
     */
    // Laravelではルーティングの再にアクションを指定しない場合にこのマジックメソッドをコールします
    public function __invoke(Request $request): Response
    {
        return $this->Responder->response(
            $this->Domain->get()
        );
    }
}
