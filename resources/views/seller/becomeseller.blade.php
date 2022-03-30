@extends('master.main')

@section('title', 'Become a vendor')

@section('content')

@include('includes.components.menuaccount')
<div class="content-profile">
    @include('includes.flash.validation')
    @include('includes.flash.error')
    <div class="h2 mb-15">Become a vendor</div>
    <table class="zebra table-space">
        <thead>
            <tr>
                <th class="text-left">
                    payment wallet
                    <div class="info-wrapper float-right">
                        <div class="info-folder">
                            <div class="info-icon">?</div>
                            <div class="info-message">The current fee to become a vendor is <strong>${{ config('general.seller_fee')}}</strong>. We will refund this amount to you in the future.</div>
                        </div>
                    </div>
                </th>
                <th>to pay</th>
                <th>paid</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="float-left"><input type="text" value="89BCRn8nPCu6goAaRtEsGujZjj7M8ccosRWmZ4w5TXdDQszbccR3jkeNAc7sJMzE9iQm3moGX4LtFaLoGCnhdnkw8d1YfMS" style="font-family: Courier; font-size: 90%; background-color: #fff; color: #000; font-weight: bold; width: 490px" disabled>
                </td>

                <td>
                   XMR {{ $sellerFee }}
                </td>
                <td>
                    <span class="flashdata flashdata-warning">{{ $user->paidSellerFee() ? 'yes' : 'no' }}</span>
                </td>
            </tr>
        </tbody>
    </table>
    <p>Get your products to your customers quickly, easily, and anonymously as an Infinity Zone independent vendor.</p>
    <div class="container" style="text-align: justify">
        <div class="h3 mb-20">Vendor contract</div>
        <ul>
            <li><strong>Client anonymity.</strong> You and you alone will have your client's shipping address. This information must be destroyed as soon as it is used to label their package.</li>
            <li><strong>Packaging.</strong> Every precaution must be taken to maintain the secrecy of the contents of your client's package. It is your responsibility to stay up-to-date on the latest stealth shipping methods.</li>
            <li><strong>Describe your items accurately and truthfully, and set clear refund policies.</strong></li>
            <li><strong>Treat your customers with respect.</strong> Go above and beyond for them. Any kind of discrimination will not be tolerated.</li>
            <li>If you have used this account as a buyer, <strong>stop now</strong>. You want to use a fresh, clean, account.</li>
            <li>Remember, violating the rules here will result in your Vendor account being banned. <strong>Take your job seriously!</strong></li>
        </ul>
        <form action="{{ route('post.becomeseller') }}" method="post">
            @csrf
            <input type="checkbox" id="terms" name="terms"> <small>I acknowledge that I have read and understood the above policies and procedures in its entirety and agree to abide by them</small>
            <div class="mt-20 float-right">
                <button type="submit">update account</button>
            </div>
        </form>
    </div>
</div>
@stop