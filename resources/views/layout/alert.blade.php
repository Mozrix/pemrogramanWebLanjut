@if (session('success') || session('status') || session('message'))
    <div class="popup-alert popup-alert-success" id="popupAlert" role="alert">
        <div class="popup-alert-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="popup-alert-body">
            <strong class="popup-alert-title">Berhasil!</strong>
            <p class="popup-alert-message">{{ session('success') ?? session('status') ?? session('message') }}</p>
        </div>
        <button type="button" class="popup-alert-close" id="popupAlertClose" aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <div class="popup-alert-progress"></div>
    </div>
@endif

@if (session('error'))
    <div class="popup-alert popup-alert-error" id="popupAlert" role="alert">
        <div class="popup-alert-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>
        <div class="popup-alert-body">
            <strong class="popup-alert-title">Terjadi Kesalahan!</strong>
            <p class="popup-alert-message">{{ session('error') }}</p>
        </div>
        <button type="button" class="popup-alert-close" id="popupAlertClose" aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <div class="popup-alert-progress"></div>
    </div>
@endif

