@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3" style='background-color:rgba(254, 240, 248, 0.8)'>
    <div class="container py-5" >
        <h1 class="display-5 fw-bold">
            Benvenuti nel mio Portfolio <img src="butterfly.jpg" alt="butterfly" style="height:100px; border-radius:30px;">
        </h1>

        <p class="col-md-8 fs-5">
       In questo portfolio ho raccolto i miei progetti più recenti come sviluppatrice web junior, ciascuno rappresenta una sfida affrontata con curiosità, precisione e creatività. Dal design dell’interfaccia alla logica backend, ogni lavoro riflette il mio impegno nel creare soluzioni digitali funzionali, accessibili e su misura. Credo nel codice pulito, nella collaborazione e nell’importanza di un’esperienza utente intuitiva. Questo spazio è il risultato di ore di studio, sperimentazione e crescita continua: una panoramica concreta del mio percorso e delle competenze che metto in campo ogni giorno e che non vedo l'ora di continuare ad espandere. 
        </p>
        <a href="{{url('/projects') }}" class="btn btn-lg text-white my-3" style='background-color:rgba(255, 36, 160, 0.8)' type="button">I miei progetti</a>
    </div>
</div>
@endsection