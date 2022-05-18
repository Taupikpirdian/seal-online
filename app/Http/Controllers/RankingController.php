<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msgfriend;
use App\pc;
use App\guildinfo;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RankingController extends Controller
{
    public function couple()
    {
        $msgfriends = msgfriend::where('couple_name', '!=', '')->orderBy('couple_daycnt', 'desc')->limit(100)->get();
        $user  = Auth::guard(getGuard())->user();
        return view('ranking.couple', compact('msgfriends', 'user'));
    }

    public function couple2()
    {
        $msgfriends = msgfriend::where('couple_name', '!=', '')->orderBy('couple_daycnt', 'desc')->limit(100)->get();

        return view('ranking.couple2', compact('msgfriends'));
    }
    
    public function fame()
    {
        $pcs = pc::where('fame', '!=', 0)->orderBy('fame', 'desc')->limit(100)->get();
        $user  = Auth::guard(getGuard())->user();
        return view('ranking.fame', compact('pcs', 'user'));
    }

    public function fame2()
    {
        $pcs = pc::where('fame', '!=', 0)->orderBy('fame', 'desc')->limit(100)->get();

        return view('ranking.fame2', compact('pcs'));
    }
    
    public function topKill()
    {
        $top_kills = pc::where('gw_score_t', '!=', 0)->orderBy('gw_score_t', 'desc')->limit(100)->get();
        $user  = Auth::guard(getGuard())->user();
        return view('ranking.top-kill', compact('top_kills', 'user'));
    }

    public function topKill2()
    {
        $top_kills = pc::where('gw_score_t', '!=', 0)->orderBy('gw_score_t', 'desc')->limit(100)->get();

        return view('ranking.top-kill2', compact('top_kills'));
    }

    public function guildInfo()
    {
        $guild_infos = guildinfo::limit(100)->get();
        foreach ($guild_infos as $key => $guild_info) {
            $guild_info->pointss = (int)$guild_info->gw_win_w*3;
        }
        $guild_infos = $guild_infos->sortByDesc('pointss');
        $user  = Auth::guard(getGuard())->user();
        return view('ranking.guild-info', compact('guild_infos', 'user'));
    }

    public function guildInfo2()
    {
        $guild_infos = guildinfo::limit(100)->get();
        foreach ($guild_infos as $key => $guild_info) {
            $guild_info->pointss = (int)$guild_info->gw_win_w*3;
        }
        $guild_infos = $guild_infos->sortByDesc('pointss');

        return view('ranking.guild-info2', compact('guild_infos'));
    }

    public function guildoverall()
	{
		echo '<div class="panel panel-default">';
		echo '	<div class="panel-body">';
		echo '		<div class="col-md-2" style="padding-left: 0px; max-width: 50px;">
						<img src="'.Config::get('URL').'images/rank_icon.png" alt="rank">
					</div>';
		echo '		<h3><b>&nbspRanking Guild</b></h3>';
		echo '		<medium>&nbsp&nbspRanking dibawah berdasarkan dari Level Guild, jumlah dan level anggota.</medium>';
		echo '		<hr>';
		echo '		<table class="table table-bordered table-striped">';
		echo '			<thead>';
		echo '				<tr>';
		echo '					<th width="32" class="text-center" colspan="2">Rank</th>';
		echo '					<th>Guild Name</th>';
		echo '					<th>Master Name</th>';
		echo '					<th class="text-center">Level</th>';
		echo '				</tr>';
		echo '		</thead>';
		echo '		<tbody>';
			$no = 0;
			foreach(RankingModel::guildrankoveral() as $guildrankoveral)
			{
				$no ++;
				echo '<tr>';
				echo '	<td width="32" class="text-center">';
				if($no == 1) 
				{
					echo '<img src="'.Config::get('URL').'images/medal/icon_rank1.gif" alt="Win1">';
				
				} elseif($no == 2) {

					echo '<img src="'.Config::get('URL').'images/medal/icon_rank2.gif" alt="Win1">';

				} elseif($no == 3) {

					echo '<img src="'.Config::get('URL').'images/medal/icon_rank3.gif" alt="Win1">';

				} else {
				
					echo $no;
				
				}
				echo '<td width="32">';
				if($guildrankoveral->emblem != -1)
				{
					foreach(array($guildrankoveral->emblem) as $x) 
					{
					    $j = intval($x / 65536);
					    $x = $x % 65536;
					    $i = intval($x / 256);
					    $k = $x % 256;
						$i=$i+1;
						$j=$j+1;
						$k=$k+1;
					}

					echo "
					<div class='emblem'>
					<div class='div1' style='width:32; height:32;'><img width='32' height='32' alt='emblem' src='".Config::get('URL')."images/guild/color/".$k.".gif"."' alt='emblem'></div>
					<div class='div2' style='width:32px; height:32px;'><img width='32' height='32' alt='emblem' src='".Config::get('URL')."images/guild/back/".$i.".gif"."' alt='emblem'></div>
					<div class='div3' style='width:32px; height:32px;'><img width='32' height='32' alt='emblem' src='".Config::get('URL')."images/guild/emblem/".$j.".gif"."' alt='emblem'></div>
					</div>
					";
				}
				echo '</td>';
				echo '	</td>';
				echo '	<td>';
				if($guildrankoveral->name == '')
				{
					echo '-';
				
				} else {
					echo $guildrankoveral->name;

				}
				echo '</td>';
				echo '	<td>'.$guildrankoveral->mastername.'</td>';
				echo '	<td class="text-center">'.$guildrankoveral->level.'</td>';
				echo '</tr>';
			}

		echo '		</tbody>';
		echo '	</table>';
		echo '	</div>';
		echo '</div>';
	}
}
