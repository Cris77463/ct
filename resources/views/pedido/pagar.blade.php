@extends ('layout_inicial')
<script type="text/javascript" src=
"https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></Script>

<script>
function carregar(){
    PagSeguroDirectPayment.setSessionid('{{$sessionID}}')
}
$(function(){
    carregar();
    
    $(".ncredito").on('blur',function(){
        PagSeguroDirectPayment.onSenderHasReady(function(response){
        if(response.status == erro){
            console.log(response.message)
            return false
        }
        var  hash = response.sanderHash
        $("hasheller").val(hash)
        })
    })
})
</script>

@section ('conteudo')
<form>
<input type="text" name="hasheller" class="hasheller">
    <div class="row">
        <div class="col-4">
            Cartao de Crédito:
            <input type="text" name="ncredito" class="ncredito form-control">
        </div>
        <div class="col-4">
            CVV:
            <input type="text" name="ncvv" class="ncvv form-control">
        </div>
        <div class="col-4">
           Mes de expiração:
            <input type="text" name="mesexp" class="mesexp form-control">
        </div>
        <div class="col-4">
           Ano de expiração:
            <input type="text" name="anoexp" class="anoexp form-control">
        </div>
        <div class="col-4">
          Nome do cartao:
            <input type="text" name="nomecartao" class="nomecartao form-control">
        </div>
        <div class="col-4">
          Parcelas:
            <input type="text" name="nparcelas" class="nparcelas form-control">
        </div>
        <div class="col-4">
          valor total:
            <input type="text" name="totalfinal" class="totalfinal form-control">
        </div>
        <div class="col-4">
          valor da parcela:
            <input type="text" name="totalparcela" class="totalparcela form-control">
        </div>
        @csrf
  
    </div>
    <br>
    <input type="button" value="Pagar" class="btn btn-lg btn-success pagar"/>
</form>
@endsection