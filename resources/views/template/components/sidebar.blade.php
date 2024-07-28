<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fas fa-car me-2"></i>Master Car</div>
    <div class="list-group list-group-flush my-3">
        <a href="{{ route('dashboard.historico.de.vendas.index') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                class="fas fa-tachometer-alt me-2"></i>Histórico de vendas</a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-chart-line me-2"></i>Nova Venda</a>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                class="fas fa-power-off me-2"></i>Sair</a>
    </div>
</div>
