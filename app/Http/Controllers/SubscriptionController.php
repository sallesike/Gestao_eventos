<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Certificate;
use Illuminate\Support\Facades\Gate;

class SubscriptionController extends Controller
{
	public $subscription;
	public $certificate;

	public function __construct(Subscription $subscription, Certificate $certificate)
	{
		$this->subscription = $subscription;
		$this->certificate 	= $certificate;
	}

	public function index ()
	{
		if(Gate::allows('eAdmin'))
		{
			$arraySubscription = $this->subscription->all();
			return view('consulta_inscricao', compact('arraySubscription'));
		}
		if(Gate::denies('eAdmin'))
		{
			return view('erro-403');
		}
	}

	public function store(Request $request)
	{
		$data = $request->all();
		$data['status'] = 'i';
		$subscription = $this->subscription->create($data);
		if($subscription)
		{
			return redirect()->route('subscription.confirm')->with('success', "Inscrição realizada com sucesso!");
		}
	}

	public function show($id)
    {   
    	if(Gate::allows('eAdmin'))
		{
	        $arraySubscription = $this->subscription->where('tb_event_id', $id)->where('status', 'i')->get();
	        $nameEvent = $this->subscription->where('tb_event_id', $id)->first();        
	        return view('mostra_inscricao', compact('arraySubscription', 'nameEvent'));
	    }
	    if(Gate::denies('eAdmin'))
		{
			return view('erro-403');
		}
    }

    public function finish($id)
    {
    	if(Gate::allows('eAdmin'))
		{
	    	$arrayCertificate = $this->certificate->where('tb_event_id', $id)->get();
	    	$event = $this->subscription->where('tb_event_id', $id)->first(); 
	    	/*$arraySubscription = $this->subscription->where('tb_event_id', $id)->where('status', 'a')->get();
	        
	        $i = 0;
	        foreach($arraySubscription as $i => $subscription)
	        {
	        	$certificate[$i] = $this->certificate->where('subscription_id', $subscription->id)->where('tb_event_id', $event->id);
	        }
	        dd($certificate);*/
	        return view('inscricao_certificado', compact('arrayCertificate', 'event'));
	    }
	    if(Gate::denies('eAdmin'))
		{
			return view('erro-403');
		}
    }

    public function confirm()
    {
    	return view('confirmacao_inscricao');
    }
}