<?php
declare(strict_types=1);

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Domain\SampleJsonDomain AS Domain;

use App\Http\Responders\SampleJsonResponder AS Responder;

class SampleJsonAction extends Controller
{

    public function __construct(
        Domain    $Domain,
        Responder $Responder
    )
    {
        $this->Domain = $Domain;
        $this->Responder = $Responder;
    }

    public function __invoke(Request $request): JsonResponse
    {
        return $this->Responder->response(
            $this->Domain->get()
        );
    }
}
