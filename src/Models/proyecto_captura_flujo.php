<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.12  |
    |              on 2021-02-18 16:34:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace Fedatario\Models; use Illuminate\Database\Eloquent\Model; use DB; trait proyecto_captura_flujo { protected $primaryKey = "\160\162\x6f\x79\x65\x63\x74\157\137\143\141\x70\x74\165\x72\141\x5f\146\x6c\x75\x6a\x6f\137\151\144"; protected $table = "\160\162\x6f\x79\x65\x63\x74\x6f\137\x63\141\x70\x74\165\x72\x61\x5f\x66\x6c\x75\x6a\x6f"; public function crear_PCF_from_PF($ajr_w) { return DB::insert("\12\40\40\x20\40\40\x20\x20\x20\x69\156\163\x65\x72\x74\x20\151\156\x74\x6f\x20\160\162\157\x79\x65\x63\164\157\x5f\x63\x61\160\x74\x75\x72\x61\x5f\x66\154\165\152\x6f\xa\40\x20\40\40\x20\40\40\x20\50\xa\40\x20\x20\x20\40\40\x20\x20\x20\x20\x20\x20\160\x72\x6f\171\145\143\x74\x6f\137\x69\144\x2c\12\40\x20\40\40\40\x20\x20\40\x20\40\x20\40\143\x61\x70\164\165\162\x61\137\x69\144\x2c\xa\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\155\157\x64\165\x6c\x6f\137\x73\x74\145\x70\137\x69\144\x2c\xa\x20\40\x20\x20\40\40\40\40\40\x20\40\40\x6d\157\144\165\154\x6f\137\163\x74\x65\x70\137\x6f\162\144\x65\x6e\x2c\12\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\155\157\x64\165\x6c\x6f\137\151\x64\xa\x20\x20\40\x20\x20\40\x20\x20\51\xa\x20\40\40\x20\40\40\40\x20\163\x65\154\x65\x63\164\x20\xa\x20\x20\x20\x20\x20\x20\x20\40\x2d\x2d\x69\x64\145\x6e\x74\151\x74\x79\12\40\40\x20\40\x20\x20\40\x20\x62\x2e\x70\x72\157\x79\x65\x63\164\157\x5f\151\144\x2c\12\40\40\x20\40\x20\40\x20\40\x61\56\x63\x61\160\164\165\x72\x61\137\151\144\x2c\12\x20\40\40\40\40\x20\x20\40\142\x2e\x6d\x6f\144\165\154\x6f\x5f\163\x74\145\160\137\151\144\x2c\12\x20\40\40\40\40\x20\x20\40\142\56\155\157\144\165\154\157\x5f\163\164\145\160\137\x6f\162\144\x65\x6e\54\12\x20\x20\40\40\x20\x20\40\40\x63\x61\x73\145\12\40\x20\x20\40\x20\40\x20\x20\40\x20\40\40\167\x68\145\156\x20\x62\56\155\157\144\x75\154\157\137\x73\164\x65\x70\137\151\x64\x20\75\x31\40\164\150\x65\156\40\141\56\143\x61\x70\164\165\x72\141\x5f\151\x64\12\40\40\40\x20\x20\40\40\x20\40\40\x20\x20\145\154\x73\145\40\156\165\x6c\154\x20\x65\x6e\x64\x20\x61\163\40\x6d\157\144\165\x6c\157\x5f\x69\144\12\x20\40\x20\40\40\40\40\40\146\x72\157\x6d\40\143\x61\x70\164\165\x72\x61\x20\141\xa\40\40\x20\x20\x20\40\x20\40\x6c\145\x66\x74\40\x6a\157\x69\x6e\x20\x70\162\157\171\145\x63\164\157\x5f\146\154\x75\152\157\40\x62\x20\12\x20\40\40\40\40\40\40\x20\40\x20\40\40\157\156\x20\141\56\x70\162\157\171\x65\143\164\157\x5f\x69\x64\x20\x3d\40\142\x2e\x70\162\157\171\x65\x63\164\x6f\x5f\x69\144\xa\x20\x20\40\40\40\x20\x20\40\167\150\x65\162\145\40\141\x2e\143\x61\x70\x74\165\162\141\x5f\x69\144\40\x3d\40\x3a\143\x61\160\x74\x75\162\x61\x5f\x69\x64\73\12\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20", ["\x63\141\160\164\x75\162\x61\137\x69\144" => $ajr_w]); } public function consultar_orden($ajr_w) { return DB::select("\xa\40\40\40\x20\40\x20\40\x20\40\40\x20\x20\x73\145\154\x65\143\164\40\12\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\x61\x2e\x63\x61\x70\x74\x75\162\141\137\x69\144\x2c\xa\40\x20\x20\40\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\x62\56\155\x6f\x64\165\154\157\x5f\x73\x74\145\x70\x5f\151\144\54\12\40\x20\x20\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\40\142\56\155\157\144\165\x6c\157\137\163\x74\x65\x70\137\157\162\x64\145\156\54\12\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\142\56\155\x6f\144\x75\154\157\137\x69\x64\12\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x66\162\157\155\x20\143\x61\x70\x74\165\x72\x61\x20\x61\12\x20\x20\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x6c\145\x66\164\40\152\x6f\x69\x6e\x20\160\162\x6f\x79\x65\143\x74\x6f\x5f\x63\x61\x70\x74\x75\x72\x61\137\x66\154\x75\152\157\40\x62\40\12\40\x20\x20\40\40\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\40\40\157\156\x20\141\56\143\x61\x70\164\x75\162\x61\x5f\151\144\40\75\x20\142\56\143\x61\x70\164\x75\x72\x61\x5f\151\144\12\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\x20\x20\40\x77\x68\145\162\145\40\x61\x2e\143\x61\160\164\x75\x72\141\x5f\151\144\x20\x3d\40\x3a\143\x61\160\x74\165\162\141\137\x69\144\x20\55\x2d\x63\141\x70\164\x75\x72\x61\x5f\151\x64\xa\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\x20\x61\156\x64\x20\142\x2e\x6d\x6f\x64\165\x6c\157\137\x73\x74\x65\x70\x5f\x69\x64\40\76\40\141\x2e\x66\x6c\165\152\x6f\x5f\x69\144\x5f\141\x63\164\165\x61\x6c\xa\40\40\40\x20\40\40\x20\40\40\40\40\x20\40\x20\40\40\157\162\x64\x65\162\x20\142\171\40\142\56\x6d\x6f\144\165\154\x6f\137\163\x74\145\x70\x5f\x6f\x72\144\145\156\xa\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x6c\151\x6d\x69\164\x20\x31\x3b\12\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\40", ["\143\141\x70\164\x75\x72\x61\x5f\x69\x64" => $ajr_w]); } public function consultar_orden_recepcion($ny97H) { return DB::select("\12\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\40\x73\145\154\145\143\x74\40\12\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\x61\x2e\143\141\160\164\x75\162\x61\137\x69\x64\54\xa\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\40\40\40\142\56\x6d\157\144\x75\x6c\157\137\x73\164\x65\x70\137\151\x64\x2c\12\40\x20\x20\x20\40\40\40\x20\40\x20\40\x20\40\40\40\40\142\56\x6d\x6f\x64\165\154\x6f\x5f\x73\x74\x65\x70\137\x6f\x72\x64\145\x6e\x2c\xa\x20\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\x62\56\155\157\144\165\154\x6f\x5f\x69\144\xa\x20\40\40\x20\40\40\40\40\x20\40\x20\40\40\40\40\40\146\x72\157\155\x20\x63\141\160\x74\x75\162\141\40\141\xa\x20\40\x20\40\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\154\x65\146\164\40\152\x6f\151\156\40\x70\162\157\x79\145\x63\x74\x6f\137\143\x61\x70\164\165\x72\x61\x5f\x66\154\x75\x6a\x6f\40\142\x20\12\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\157\x6e\x20\x61\56\x63\141\160\164\x75\x72\141\x5f\151\x64\40\75\x20\142\x2e\x63\x61\160\164\165\x72\141\137\x69\144\12\x20\40\40\40\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\x77\150\145\x72\x65\40\141\x2e\162\x65\143\x65\160\143\x69\157\x6e\137\151\x64\x20\x3d\x20\x3a\x72\145\x63\145\160\143\x69\x6f\x6e\137\x69\144\40\55\55\143\x61\x70\164\x75\162\x61\137\151\x64\xa\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\40\x20\40\x20\40\40\141\x6e\144\40\142\56\x6d\x6f\x64\x75\154\x6f\x5f\163\x74\145\160\137\x69\x64\x20\76\40\141\56\x66\154\165\x6a\157\x5f\x69\144\137\x61\143\x74\165\141\154\xa\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\40\x20\x20\157\162\144\145\162\x20\142\171\40\142\x2e\x6d\x6f\144\x75\154\x6f\x5f\163\x74\145\160\x5f\x6f\x72\144\145\x6e\xa\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x6c\x69\155\x69\x74\x20\61\x3b\xa\40\40\x20\x20\40\x20\x20\x20\40\40\x20\x20", ["\x72\x65\143\x65\x70\x63\151\157\x6e\137\151\144" => $ny97H]); } }
