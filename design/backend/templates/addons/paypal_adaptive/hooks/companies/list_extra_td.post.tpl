<td class="row-status {if $company.paypal_verification == 'verified'}text-success{elseif $company.paypal_verification == 'not_verified'}text-error{/if}">{__($company.paypal_verification)}</td>