<style>
    .lang-body:lang(ar) {
        direction: rtl;
        text-align: right;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        text-transform: capitalize;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
</style>

<div class="dropdown">
    <script>
        document.querySelector('html').lang = "<?= app()->currentLocale() ?>";
        document.querySelector('.dropdown').onclick = function() {
            document.querySelector('.dropdown-content').classList.toggle('d-block');
        }
    </script>
    <span class="btn btn-secondary">
        <img style="height: 20px;margin-right:5px;"
            src="{{ asset('images/lang/' . LaravelLocalization::getCurrentLocale() . '.png') }}" />
        <small>{{ LaravelLocalization::getCurrentLocaleNative() }}</small>
    </span>
    <div class="dropdown-content">
        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a class="btn d-flex align-items-center gap-2" rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img style="height: 20px;margin-right:5px;" src="{{ asset('images/lang/' . $localeCode . '.png') }}"
                    alt="{{ $localeCode }}" />
                <small>{{ $properties['native'] }}</small>
            </a>
        @endforeach
    </div>
</div>
