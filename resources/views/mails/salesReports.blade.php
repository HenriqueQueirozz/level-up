<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Relatório de Vendas</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

            * {
                font-family: 'Nunito', sans-serif;
                box-sizing: border-box;
            }
            header, footer{
                background-color: #005AAA;
                width: 100%;
            }

            header{
                color: #DDE2DE;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 2%;
            }

            footer{
                height: 50px;
            }

            header img{
                width: 8%;
            }
            main {
                padding: 5%;
                height: 80vh;
            }
            
            table {
                width: 100%;
                margin: 3% auto 0 auto;
            }

            table thead {
                background-color: #1B1C1E;
                color: #DDE2DE;
            }

            table thead th {
                padding: 1%;
                border: none;
            }
            table tbody td {
                padding: 1%;
                border: none;
            }

            .text-right{
                text-align: right;
            }

            .text-left{
                text-align: left;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Level Up</h1>
        </header>
        <main>
            <h2>Relatório de Vendas</h2>
            <p>Olá {{ $seller->name }}, aqui está o relatório de vendas do dia <strong>{{ date('d/m/Y') }}</strong>, as vendas do dia totalizam R${{ $amount }}.</p>    
            <table>
                <thead>
                    <tr>
                        <th class="text-left" width="10%">N° venda</th>
                        <th class="text-left">Vendedor</th>
                        <th class="text-right">Comissão (R$)</th>
                        <th class="text-right">Valor da venda (R$)</th>
                        <th class="text-left">Data venda</th>   
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            <td class="text-left">{{ $sale->id }}</td>
                            <td class="text-left">{{ $sale->seller->name }}</td>
                            <td class="text-right">{{ $sale->commission }}</td>
                            <td class="text-right">{{ $sale->value }}</td>
                            <td class="text-left">{{ $sale->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot></tfoot>
            </table>
        </main>
        <footer>

        </footer>
    </body>
</html>