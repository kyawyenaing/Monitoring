<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EofficeController extends Controller
{	
	public function index(){

	 
		$nevlogin = array(
			 "data" => array(
		        array(
		            "LoginUserName" => "dispatch-131",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ကျန်းမာရေး) ရုံးအဖွဲ့)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20011",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "သမ္မတရုံးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20001",
		            "Name" => "စာပေးစာယူ(သမ္မတရုံးဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဌာနကြီးမှူး(ထုတ်လုပ်ရေး)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-111",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ထုတ်လုပ်ရေး) ရုံးအဖွဲ့)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20028",
		            "Name" => "စာပေးစာယူ(စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2015",
		            "Name" => "စာပေးစာယူ(ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္"
		        ),
		        array(
		            "LoginUserName" => "dispatch-002",
		            "Name" => "စာပေးစာယူ(ဒုတိယမြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဒုတိယမြို့တော်ဝန်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20036",
		            "Name" => "စာပေးစာယူ(မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-216",
		            "Name" => "စာပေးစာယူ(ကျန်းမာရေးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ကျန်းမာရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-218",
		            "Name" => "စာပေးစာယူ(မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-203",
		            "Name" => "စာပေးစာယူ(စစ်ဆေးရေး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "စစ်ဆေးရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-212",
		            "Name" => "စာပေးစာယူ(အင်/ယာ ရေသန့်)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20021",
		            "Name" => "စာပေးစာယူ(သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1013",
		            "Name" => "စာပေးစာယူ(စာရင်းစစ်နှင့်ဘဏ္ဍာရေး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "စာရင်းစစ်နှင့်ဘဏ္ဍာရေးဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20003",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-210",
		            "Name" => "စာပေးစာယူ(အင်/ယာ လမ်းတံတား)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "အင်ဂျင်နီယာဌာန(လမ်းတံတား)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-223",
		            "Name" => "စာပေးစာယူ(ဘိလပ်မြေစက်ရုံ(နေပြည်တော်))",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဘိလပ်မြေစက်ရုံ(နေပြည်တော်)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2111",
		            "Name" => "စာပေးစာယူ(MICC2)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "MICC2"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20035",
		            "Name" => "စာပေးစာယူ(ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2014",
		            "Name" => "စာပေးစာယူ(ဇမ္ဗူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဇဗ္မူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1012",
		            "Name" => "စာပေးစာယူ(မူဝါဒဆိုင်ရာများနှင့်အစည်းအဝေးမှတ်တမ်းများ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "မူဝါဒဆိုင်ရာများနှင့် အစည်းအဝေးမှတ်တမ်းများဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20025",
		            "Name" => "စာပေးစာယူ(စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20018",
		            "Name" => "စာပေးစာယူ(သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-220",
		            "Name" => "စာပေးစာယူ(\\tထုတ်လုပ်ရေးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ထုတ်လုပ်ရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-004",
		            "Name" => "စာပေးစာယူ(ကော်မတီဝင်-၂ ရုံးအဖွဲ့)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ကော်မတီဝင်(၂)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-214",
		            "Name" => "စာပေးစာယူ(ဗဟိုပစ္စည်းထိန်းဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဗဟိုပစ္စည်းထိန်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-209",
		            "Name" => "စာပေးစာယူ(ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20033",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "Float-20033",
		            "Name" => "မျှောစာတွဲ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "နေပြည်တော်ကောင်စီ"
		        ),
		        array(
		            "LoginUserName" => "Receive-20033",
		            "Name" => "ရုံးလက်ခံ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20032",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်ကောင်စီ)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20038",
		            "Name" => "စာပေးစာယူ(တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20015",
		            "Name" => "စာပေးစာယူ(နယ်စပ်ရေးရာဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20031",
		            "Name" => "စာပေးစာယူ(ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-202",
		            "Name" => "စာပေးစာယူ(ဘတ်ဂျက်နှင့်ငွေစာရင်း)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဘက်ဂျက်နှင့်ငွေစာရင်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2018",
		            "Name" => "စာပေးစာယူ(ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20037",
		            "Name" => "စာပေးစာယူ(အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-001",
		            "Name" => "စာပေးစာယူ(မြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "မြို့တော်ဝန်ရုံးအဖွဲ့"
		        ),
		        array(
		            "LoginUserName" => "dispatch-225",
		            "Name" => "စာပေးစာယူ(\\tမြို့တော်ဂေါက်ကွင်း)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "မြို့တော်ဂေါက်ကွင်း"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20029",
		            "Name" => "စာပေးစာယူ(ဆောက်လုပ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ဆောက်လုပ်ရေးဝန်ကြီးဌာန"
		        ),
		    )
		);
      	$eoffdata = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "ၿမိဳ႕ေတာ္ဝန္႐ံုး",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "ၿမိဳ႕ေတာ္ဝန္႐ံုး",
		            "Position" => "႐ံုးအုပ္",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        )
		    )
		);

      	$never = json_encode($nevlogin);
      	$neverlog = json_decode($never);
      	$neverlogdata = $neverlog->data;

   		$eoffice = json_encode($eoffdata);
		$eofficedata = json_decode($eoffice);
		$eofficedatas = $eofficedata->data;

		return view('Eoffice.eoffice', compact('eofficedatas','neverlogdata'));
 
    }

    public function neverlogin(){
    	$nevlogin = array(
			 "data" => array(
		        array(
		            "LoginUserName" => "dispatch-131",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ကျန်းမာရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20011",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သမ္မတရုံးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20001",
		            "Name" => "စာပေးစာယူ(သမ္မတရုံးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဌာနကြီးမှူး(ထုတ်လုပ်ရေး)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-111",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ထုတ်လုပ်ရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20028",
		            "Name" => "စာပေးစာယူ(စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2015",
		            "Name" => "စာပေးစာယူ(ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္"
		        ),
		        array(
		            "LoginUserName" => "dispatch-002",
		            "Name" => "စာပေးစာယူ(ဒုတိယမြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဒုတိယမြို့တော်ဝန်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20036",
		            "Name" => "စာပေးစာယူ(မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-216",
		            "Name" => "စာပေးစာယူ(ကျန်းမာရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကျန်းမာရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-218",
		            "Name" => "စာပေးစာယူ(မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-203",
		            "Name" => "စာပေးစာယူ(စစ်ဆေးရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စစ်ဆေးရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-212",
		            "Name" => "စာပေးစာယူ(အင်/ယာ ရေသန့်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20021",
		            "Name" => "စာပေးစာယူ(သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1013",
		            "Name" => "စာပေးစာယူ(စာရင်းစစ်နှင့်ဘဏ္ဍာရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စာရင်းစစ်နှင့်ဘဏ္ဍာရေးဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20003",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-210",
		            "Name" => "စာပေးစာယူ(အင်/ယာ လမ်းတံတား)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(လမ်းတံတား)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-223",
		            "Name" => "စာပေးစာယူ(ဘိလပ်မြေစက်ရုံ(နေပြည်တော်))",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘိလပ်မြေစက်ရုံ(နေပြည်တော်)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2111",
		            "Name" => "စာပေးစာယူ(MICC2)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "MICC2"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20035",
		            "Name" => "စာပေးစာယူ(ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2014",
		            "Name" => "စာပေးစာယူ(ဇမ္ဗူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇဗ္မူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1012",
		            "Name" => "စာပေးစာယူ(မူဝါဒဆိုင်ရာများနှင့်အစည်းအဝေးမှတ်တမ်းများ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မူဝါဒဆိုင်ရာများနှင့် အစည်းအဝေးမှတ်တမ်းများဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20025",
		            "Name" => "စာပေးစာယူ(စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20018",
		            "Name" => "စာပေးစာယူ(သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-220",
		            "Name" => "စာပေးစာယူ(\\tထုတ်လုပ်ရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ထုတ်လုပ်ရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-004",
		            "Name" => "စာပေးစာယူ(ကော်မတီဝင်-၂ ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကော်မတီဝင်(၂)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-214",
		            "Name" => "စာပေးစာယူ(ဗဟိုပစ္စည်းထိန်းဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဗဟိုပစ္စည်းထိန်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-209",
		            "Name" => "စာပေးစာယူ(ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20033",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "Float-20033",
		            "Name" => "မျှောစာတွဲ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်ကောင်စီ"
		        ),
		        array(
		            "LoginUserName" => "Receive-20033",
		            "Name" => "ရုံးလက်ခံ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20032",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်ကောင်စီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20038",
		            "Name" => "စာပေးစာယူ(တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20015",
		            "Name" => "စာပေးစာယူ(နယ်စပ်ရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20031",
		            "Name" => "စာပေးစာယူ(ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-202",
		            "Name" => "စာပေးစာယူ(ဘတ်ဂျက်နှင့်ငွေစာရင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘက်ဂျက်နှင့်ငွေစာရင်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2018",
		            "Name" => "စာပေးစာယူ(ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20037",
		            "Name" => "စာပေးစာယူ(အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-001",
		            "Name" => "စာပေးစာယူ(မြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံးအဖွဲ့"
		        ),
		        array(
		            "LoginUserName" => "dispatch-225",
		            "Name" => "စာပေးစာယူ(\\tမြို့တော်ဂေါက်ကွင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဂေါက်ကွင်း"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20029",
		            "Name" => "စာပေးစာယူ(ဆောက်လုပ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဆောက်လုပ်ရေးဝန်ကြီးဌာန"
		        ),
		    )
		);
		
		$never = json_encode($nevlogin);
      	$neverlog = json_decode($never);
      	$neverlogdatas = $neverlog->data;

    	return view('Eoffice.neverlogin',compact('neverlogdatas'));
    }
    public function neverlogin7days(){
    	$nevlogin = array(
			 "data" => array(
		        array(
		            "LoginUserName" => "dispatch-131",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ကျန်းမာရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20011",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သမ္မတရုံးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20001",
		            "Name" => "စာပေးစာယူ(သမ္မတရုံးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဌာနကြီးမှူး(ထုတ်လုပ်ရေး)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-111",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ထုတ်လုပ်ရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20028",
		            "Name" => "စာပေးစာယူ(စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2015",
		            "Name" => "စာပေးစာယူ(ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္"
		        ),
		        array(
		            "LoginUserName" => "dispatch-002",
		            "Name" => "စာပေးစာယူ(ဒုတိယမြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဒုတိယမြို့တော်ဝန်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20036",
		            "Name" => "စာပေးစာယူ(မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-216",
		            "Name" => "စာပေးစာယူ(ကျန်းမာရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကျန်းမာရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-218",
		            "Name" => "စာပေးစာယူ(မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-203",
		            "Name" => "စာပေးစာယူ(စစ်ဆေးရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စစ်ဆေးရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-212",
		            "Name" => "စာပေးစာယူ(အင်/ယာ ရေသန့်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20021",
		            "Name" => "စာပေးစာယူ(သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1013",
		            "Name" => "စာပေးစာယူ(စာရင်းစစ်နှင့်ဘဏ္ဍာရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စာရင်းစစ်နှင့်ဘဏ္ဍာရေးဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20003",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-210",
		            "Name" => "စာပေးစာယူ(အင်/ယာ လမ်းတံတား)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(လမ်းတံတား)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-223",
		            "Name" => "စာပေးစာယူ(ဘိလပ်မြေစက်ရုံ(နေပြည်တော်))",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘိလပ်မြေစက်ရုံ(နေပြည်တော်)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2111",
		            "Name" => "စာပေးစာယူ(MICC2)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "MICC2"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20035",
		            "Name" => "စာပေးစာယူ(ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2014",
		            "Name" => "စာပေးစာယူ(ဇမ္ဗူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇဗ္မူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1012",
		            "Name" => "စာပေးစာယူ(မူဝါဒဆိုင်ရာများနှင့်အစည်းအဝေးမှတ်တမ်းများ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မူဝါဒဆိုင်ရာများနှင့် အစည်းအဝေးမှတ်တမ်းများဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20025",
		            "Name" => "စာပေးစာယူ(စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20018",
		            "Name" => "စာပေးစာယူ(သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-220",
		            "Name" => "စာပေးစာယူ(\\tထုတ်လုပ်ရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ထုတ်လုပ်ရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-004",
		            "Name" => "စာပေးစာယူ(ကော်မတီဝင်-၂ ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကော်မတီဝင်(၂)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-214",
		            "Name" => "စာပေးစာယူ(ဗဟိုပစ္စည်းထိန်းဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဗဟိုပစ္စည်းထိန်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-209",
		            "Name" => "စာပေးစာယူ(ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20033",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "Float-20033",
		            "Name" => "မျှောစာတွဲ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်ကောင်စီ"
		        ),
		        array(
		            "LoginUserName" => "Receive-20033",
		            "Name" => "ရုံးလက်ခံ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20032",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်ကောင်စီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20038",
		            "Name" => "စာပေးစာယူ(တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20015",
		            "Name" => "စာပေးစာယူ(နယ်စပ်ရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20031",
		            "Name" => "စာပေးစာယူ(ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-202",
		            "Name" => "စာပေးစာယူ(ဘတ်ဂျက်နှင့်ငွေစာရင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘက်ဂျက်နှင့်ငွေစာရင်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2018",
		            "Name" => "စာပေးစာယူ(ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20037",
		            "Name" => "စာပေးစာယူ(အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-001",
		            "Name" => "စာပေးစာယူ(မြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံးအဖွဲ့"
		        ),
		        array(
		            "LoginUserName" => "dispatch-225",
		            "Name" => "စာပေးစာယူ(\\tမြို့တော်ဂေါက်ကွင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဂေါက်ကွင်း"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20029",
		            "Name" => "စာပေးစာယူ(ဆောက်လုပ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဆောက်လုပ်ရေးဝန်ကြီးဌာန"
		        ),
		    )
		);
		
		$never = json_encode($nevlogin);
      	$neverlog = json_decode($never);
      	$neverlogdatas = $neverlog->data;

    	return view('Eoffice.neverlogin7days',compact('neverlogdatas'));
    }
    public function neverloginformonth(){
    	$nevlogin = array(
			 "data" => array(
		        array(
		            "LoginUserName" => "dispatch-131",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ကျန်းမာရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20011",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သမ္မတရုံးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20001",
		            "Name" => "စာပေးစာယူ(သမ္မတရုံးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဌာနကြီးမှူး(ထုတ်လုပ်ရေး)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-111",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ထုတ်လုပ်ရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20028",
		            "Name" => "စာပေးစာယူ(စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2015",
		            "Name" => "စာပေးစာယူ(ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္"
		        ),
		        array(
		            "LoginUserName" => "dispatch-002",
		            "Name" => "စာပေးစာယူ(ဒုတိယမြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဒုတိယမြို့တော်ဝန်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20036",
		            "Name" => "စာပေးစာယူ(မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-216",
		            "Name" => "စာပေးစာယူ(ကျန်းမာရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကျန်းမာရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-218",
		            "Name" => "စာပေးစာယူ(မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-203",
		            "Name" => "စာပေးစာယူ(စစ်ဆေးရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စစ်ဆေးရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-212",
		            "Name" => "စာပေးစာယူ(အင်/ယာ ရေသန့်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20021",
		            "Name" => "စာပေးစာယူ(သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1013",
		            "Name" => "စာပေးစာယူ(စာရင်းစစ်နှင့်ဘဏ္ဍာရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စာရင်းစစ်နှင့်ဘဏ္ဍာရေးဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20003",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-210",
		            "Name" => "စာပေးစာယူ(အင်/ယာ လမ်းတံတား)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(လမ်းတံတား)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-223",
		            "Name" => "စာပေးစာယူ(ဘိလပ်မြေစက်ရုံ(နေပြည်တော်))",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘိလပ်မြေစက်ရုံ(နေပြည်တော်)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2111",
		            "Name" => "စာပေးစာယူ(MICC2)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "MICC2"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20035",
		            "Name" => "စာပေးစာယူ(ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2014",
		            "Name" => "စာပေးစာယူ(ဇမ္ဗူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇဗ္မူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1012",
		            "Name" => "စာပေးစာယူ(မူဝါဒဆိုင်ရာများနှင့်အစည်းအဝေးမှတ်တမ်းများ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မူဝါဒဆိုင်ရာများနှင့် အစည်းအဝေးမှတ်တမ်းများဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20025",
		            "Name" => "စာပေးစာယူ(စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20018",
		            "Name" => "စာပေးစာယူ(သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-220",
		            "Name" => "စာပေးစာယူ(\\tထုတ်လုပ်ရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ထုတ်လုပ်ရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-004",
		            "Name" => "စာပေးစာယူ(ကော်မတီဝင်-၂ ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကော်မတီဝင်(၂)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-214",
		            "Name" => "စာပေးစာယူ(ဗဟိုပစ္စည်းထိန်းဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဗဟိုပစ္စည်းထိန်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-209",
		            "Name" => "စာပေးစာယူ(ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20033",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "Float-20033",
		            "Name" => "မျှောစာတွဲ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်ကောင်စီ"
		        ),
		        array(
		            "LoginUserName" => "Receive-20033",
		            "Name" => "ရုံးလက်ခံ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20032",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်ကောင်စီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20038",
		            "Name" => "စာပေးစာယူ(တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20015",
		            "Name" => "စာပေးစာယူ(နယ်စပ်ရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20031",
		            "Name" => "စာပေးစာယူ(ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-202",
		            "Name" => "စာပေးစာယူ(ဘတ်ဂျက်နှင့်ငွေစာရင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘက်ဂျက်နှင့်ငွေစာရင်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2018",
		            "Name" => "စာပေးစာယူ(ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20037",
		            "Name" => "စာပေးစာယူ(အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-001",
		            "Name" => "စာပေးစာယူ(မြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံးအဖွဲ့"
		        ),
		        array(
		            "LoginUserName" => "dispatch-225",
		            "Name" => "စာပေးစာယူ(\\tမြို့တော်ဂေါက်ကွင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဂေါက်ကွင်း"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20029",
		            "Name" => "စာပေးစာယူ(ဆောက်လုပ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဆောက်လုပ်ရေးဝန်ကြီးဌာန"
		        ),
		    )
		);
		
		$never = json_encode($nevlogin);
      	$neverlog = json_decode($never);
      	$neverlogdatas = $neverlog->data;

    	return view('Eoffice.neverloginformonth',compact('neverlogdatas'));
    }
    public function neverlogincustomdate(){
    	$nevlogin = array(
			 "data" => array(
		        array(
		            "LoginUserName" => "dispatch-131",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ကျန်းမာရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20011",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုစာရင်းစစ်ချုပ်ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သမ္မတရုံးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20001",
		            "Name" => "စာပေးစာယူ(သမ္မတရုံးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဌာနကြီးမှူး(ထုတ်လုပ်ရေး)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-111",
		            "Name" => "စာပေးစာယူ(ဌာနကြီးမှူး(ထုတ်လုပ်ရေး) ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20028",
		            "Name" => "စာပေးစာယူ(စီမံကိန်းနှင့် ဘဏ္ဍာရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2015",
		            "Name" => "စာပေးစာယူ(ပုဗ္ဗသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ၿမိဳ႕ေတာ္ဝန္"
		        ),
		        array(
		            "LoginUserName" => "dispatch-002",
		            "Name" => "စာပေးစာယူ(ဒုတိယမြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဒုတိယမြို့တော်ဝန်ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20036",
		            "Name" => "စာပေးစာယူ(မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြန်မာနိုင်ငံတော်ဗဟိုဘဏ်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-216",
		            "Name" => "စာပေးစာယူ(ကျန်းမာရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကျန်းမာရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-218",
		            "Name" => "စာပေးစာယူ(မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှူဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-203",
		            "Name" => "စာပေးစာယူ(စစ်ဆေးရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စစ်ဆေးရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-212",
		            "Name" => "စာပေးစာယူ(အင်/ယာ ရေသန့်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20021",
		            "Name" => "စာပေးစာယူ(သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သယံဇာတနှင့် သဘာဝပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1013",
		            "Name" => "စာပေးစာယူ(စာရင်းစစ်နှင့်ဘဏ္ဍာရေး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စာရင်းစစ်နှင့်ဘဏ္ဍာရေးဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20003",
		            "Name" => "စာပေးစာယူ(ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပြည်ထောင်စုအစိုးရအဖွဲ့ရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-210",
		            "Name" => "စာပေးစာယူ(အင်/ယာ လမ်းတံတား)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အင်ဂျင်နီယာဌာန(လမ်းတံတား)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-223",
		            "Name" => "စာပေးစာယူ(ဘိလပ်မြေစက်ရုံ(နေပြည်တော်))",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘိလပ်မြေစက်ရုံ(နေပြည်တော်)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2111",
		            "Name" => "စာပေးစာယူ(MICC2)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "MICC2"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20035",
		            "Name" => "စာပေးစာယူ(ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ရန်ကုန်မြို့တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2014",
		            "Name" => "စာပေးစာယူ(ဇမ္ဗူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇဗ္မူသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-1012",
		            "Name" => "စာပေးစာယူ(မူဝါဒဆိုင်ရာများနှင့်အစည်းအဝေးမှတ်တမ်းများ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မူဝါဒဆိုင်ရာများနှင့် အစည်းအဝေးမှတ်တမ်းများဌာနခွဲ"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20025",
		            "Name" => "စာပေးစာယူ(စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "စီးပွားရေးနှင့် ကူးသန်းရောင်းဝယ်ရေးဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20018",
		            "Name" => "စာပေးစာယူ(သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "သာသနာရေးနှင့် ယဉ်ကျေးမှုဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-220",
		            "Name" => "စာပေးစာယူ(\\tထုတ်လုပ်ရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ထုတ်လုပ်ရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-004",
		            "Name" => "စာပေးစာယူ(ကော်မတီဝင်-၂ ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ကော်မတီဝင်(၂)"
		        ),
		        array(
		            "LoginUserName" => "dispatch-214",
		            "Name" => "စာပေးစာယူ(ဗဟိုပစ္စည်းထိန်းဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဗဟိုပစ္စည်းထိန်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-209",
		            "Name" => "စာပေးစာယူ(ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်သန့်ရှင်းရေးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20033",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ"
		        ),
		        array(
		            "LoginUserName" => "Float-20033",
		            "Name" => "မျှောစာတွဲ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နေပြည်တော်ကောင်စီ"
		        ),
		        array(
		            "LoginUserName" => "Receive-20033",
		            "Name" => "ရုံးလက်ခံ(နေပြည်တော်စည်ပင်သာယာရေးကော်မတီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20032",
		            "Name" => "စာပေးစာယူ(နေပြည်တော်ကောင်စီ)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20038",
		            "Name" => "စာပေးစာယူ(တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "တိုင်းရင်းသားလူမျိုးများရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20015",
		            "Name" => "စာပေးစာယူ(နယ်စပ်ရေးရာဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "နယ်စပ်ရေးရာဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20031",
		            "Name" => "စာပေးစာယူ(ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဟိုတယ်နှင့် ခရီးသွားလာရေးလုပ်ငန်းဝန်ကြီးဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-202",
		            "Name" => "စာပေးစာယူ(ဘတ်ဂျက်နှင့်ငွေစာရင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဘက်ဂျက်နှင့်ငွေစာရင်းဌာန"
		        ),
		        array(
		            "LoginUserName" => "dispatch-2018",
		            "Name" => "စာပေးစာယူ(ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဇေယျာသီရိမြို့နယ်စည်ပင်သာယာအုပ်ချုပ်ရေးမှူးရုံး"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20037",
		            "Name" => "စာပေးစာယူ(အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "အဂတိလိုက်စားမှုတိုက်ဖျက်ရေးကော်မရှင်"
		        ),
		        array(
		            "LoginUserName" => "dispatch-001",
		            "Name" => "စာပေးစာယူ(မြို့တော်ဝန်ရုံးအဖွဲ့)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံးအဖွဲ့"
		        ),
		        array(
		            "LoginUserName" => "dispatch-225",
		            "Name" => "စာပေးစာယူ(\\tမြို့တော်ဂေါက်ကွင်း)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဂေါက်ကွင်း"
		        ),
		        array(
		            "LoginUserName" => "dispatch-20029",
		            "Name" => "စာပေးစာယူ(ဆောက်လုပ်ရေးဝန်ကြီးဌာန)",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "ဆောက်လုပ်ရေးဝန်ကြီးဌာန"
		        ),
		    )
		);
		
		$never = json_encode($nevlogin);
      	$neverlog = json_decode($never);
      	$neverlogdatas = $neverlog->data;

    	return view('Eoffice.neverlogincustom',compact('neverlogdatas'));

    }
    public function neverlogincustom(Request $request){
    	$this->validate($request, [ 
            'start_date_neverlogin' => 'required',
            'end_date_neverlogin' => 'required',
        ]);
    	$start_date_neverlogin = date("Y-m-d", strtotime( $request->input('start_date_neverlogin')));
    	$end_date_neverlogin = date("Y-m-d", strtotime( $request->input('end_date_neverlogin')));
    	return redirect('e-office/never-login-users/'.$start_date_neverlogin. '/' .$end_date_neverlogin ); 
    }

    public function noaction(){
    	$noaction = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        )
		    )
		);

		$docu = json_encode($noaction);
		$noactiondata = json_decode($docu);
		$noactiondatas = $noactiondata->data;

    	return view('Eoffice.noaction', compact('noactiondatas'));
    }
    public function noaction7days(){
    	$noaction = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"

		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        )
		    )
		);

		$docu = json_encode($noaction);
		$noactiondata = json_decode($docu);
		$noactiondatas = $noactiondata->data;

    	return view('Eoffice.noaction7days', compact('noactiondatas'));
    }
    public function noactionformonth(){
    	$noaction = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"

		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        )
		    )
		);

		$docu = json_encode($noaction);
		$noactiondata = json_decode($docu);
		$noactiondatas = $noactiondata->data;

    	return view('Eoffice.noactionformonth', compact('noactiondatas'));
    }
    public function noactioncustomdate(){
    	$noaction = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"

		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\\/Date(1518155538773)\\/"
		        )
		    )
		);

		$docu = json_encode($noaction);
		$noactiondata = json_decode($docu);
		$noactiondatas = $noactiondata->data;

    	return view('Eoffice.noactioncustom', compact('noactiondatas'));
    }
    public function noactioncustom(Request $request){
    	$this->validate($request, [ 
            'start_date_noaction' => 'required',
            'end_date_noaction' => 'required',
        ]);
    	$start_date_noaction = date("Y-m-d", strtotime( $request->input('start_date_noaction')));
    	$end_date_noaction = date("Y-m-d", strtotime( $request->input('end_date_noaction')));
    	return redirect('e-office/no-action/'.$start_date_noaction. '/' .$end_date_noaction); 
    }

    public function document(){
    	$docs = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        )
		    )
		);

		$docu = json_encode($docs);
		$document = json_decode($docu);
		$documents = $document->data;

    	return view('Eoffice.document',compact('documents'));
    }
    public function document7days(){
    	$docs = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        )
		    )
		);

		$docu = json_encode($docs);
		$document = json_decode($docu);
		$documents = $document->data;

    	return view('Eoffice.document7days',compact('documents'));
    }
    public function documentformonth(){
    	$docs = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        )
		    )
		);

		$docu = json_encode($docs);
		$document = json_decode($docu);
		$documents = $document->data;

    	return view('Eoffice.documentformonth',compact('documents'));
    }
     public function documentcustomdate(){
     	$docs = array(
		    "data" => array(
		        array(
		            "LoginUserName" => "dispatch-101",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "null",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        ),
		        array(
		        	"LoginUserName" => "DrMyoAung",
		            "Name" => "မြို့တော်ဝန်ရုံး",
		            "Position" => "ရုံးအုပ်",
		            "Office" => "မြို့တော်ဝန်ရုံး",
		            "DocAction" => "update",
		            "Loginout" => "true",
		            "ActionDateTime" => "\/Date(1518155538773)\/"
		        )
		    )
		);

		$docu = json_encode($docs);
		$document = json_decode($docu);
		$documents = $document->data;

    	return view('Eoffice.documentcustom',compact('documents'));
    }
    public function documentcustom(Request $request){
    	$this->validate($request, [ 
            'start_date_docs' => 'required',
            'end_date_docs' => 'required',
        ]);
    	$start_date_docs = date("Y-m-d", strtotime( $request->input('start_date_docs')));
    	$end_date_docs = date("Y-m-d", strtotime( $request->input('end_date_docs')));
    	return redirect('e-office/documentation-process/'.$start_date_docs. '/' .$end_date_docs); 
    }

    public function view(){
    	return view('Eoffice.view');
    }

    // public function testapi(){

    //     $client = new Client();
    //     $body = $client->request('GET','http://192.168.1.247/NPTDC/api/initial_login')->getBody();
    //     $initb = (string) $body;
    //     $initlog = json_decode($initb);
    //     $initlogin = $initlog->data;
    //     return view('webportal',compact('initlogin'));
    // }
 
}
