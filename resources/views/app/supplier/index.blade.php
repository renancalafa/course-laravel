<h3>Suppliers</h3>

@php
    /*
        if (!condition) = {{ @unless }}
    */
@endphp

{{-- @dd($suppliers) --}}


@isset($suppliers)
    @for($i = 0; isset($suppliers[$i]); $i++)

        {{-- @dd($loop) --}}

        Supplier: {{ $suppliers[$i]['name'] }}
        <br>
        CNPJ: {{$suppliers[$i]['cnpj'] ?? 'Unknown'}}
        <br>
        Status: 

        @if($suppliers[$i]['status'] == 'A')
            Supplier is Active.
        @else
            Supplier is Inactive.
        @endif

        <br>
        Phone Number: ({{ $suppliers[$i]['ddd'] ?? ''}}) {{ $suppliers[$i]['phoneNumber'] ?? ''}}
        <br>
        Local: 
        @switch($suppliers[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('85')
                Fortaleza - Ceará
                @break
            @case('81')
                Pernambuco - Recife
                @break
            @default
                State Unknown
        @endswitch 
        <hr>
    @endfor

    {{-- @foreach($suppliers as $key => $supplier)
        Supplier: {{ $supplier['name'] }}
        <br>
        CNPJ: {{$supplier['cnpj'] ?? 'Unknown'}}
        <hr>
    @endforeach --}}

    {{-- @forelse($suppliers as $key => $supplier)
        Supplier: {{ $supplier['name'] }}
        <br>
        CNPJ: {{$supplier['cnpj'] ?? 'Unknown'}}
        <hr>
    @empty
        Supplier's List is Empty.    
    @endforelse --}}

@endisset

{{-- @if(count($suppliers) > 0 && count($suppliers) <= 10)
    <h3>There are some suppliers registered</h3>
@elseif(count($suppliers) > 10)
    <h3>There are lots of suppliers registered.</h3>
@else
    <h3>There are no supplier registered.</h3
@endif --}}