<div class="row justify-content-center">
    <div class="tree-map justify-content-center" id="treeMap">
        @foreach ($treeMapData as $item)
            <div
                style="flex: 1 1 {{ $item['percentage'] * 2 }}%; background-color: rgba(0, 123, 255, {{ $item['percentage'] / 20 }});">
                <b>
                    {{ $item['car_name'] }}<br>{{ number_format($item['percentage'], 2) }}%<br>R$ {{ number_format($item['amount'], 2) }}
                </b>
            </div>
        @endforeach
    </div>

</div>
