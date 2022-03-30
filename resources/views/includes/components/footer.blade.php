<footer>
   <span class="footer-link float-left" style="color: black">1 XMR ≅ {{ \App\Tools\Converter::currencyConverter(\App\Tools\Converter::moneroLastPrice(), auth()->user()->currency) }} {{ \App\Tools\Converter::getSymbol(auth()->user()->currency) }}</span><a href="{{ config('general.wiki_link') }}">wiki</a> | <a href="https://t.me/anony_marketing_arena">Telegram forum</a> | <a href="{{ asset('pgp.txt') }}" target="_blank">pgp key</a> | <a href="{{ route('support') }}" class="footer-link">support</a>
</footer>

