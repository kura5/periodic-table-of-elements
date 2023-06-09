<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="元素周期表">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>元素周期表</title>
<style>
<?php
echo file_get_contents('./css/normalize.min.css');
echo file_get_contents('./css/main.css');
?>
</style>
<script type="module">
import modules from "./js/main.js";
modules.addClickListener();
</script>
</head>

<body>

<h1>元素周期表</h1>

<div class="overflow-auto">
<table id="periodic_table_main" class="periodic_table">
	<thead>
    <tr>
		  <td></td>
		  <td>1族</td>
		  <td>2族</td>
		  <td>3族</td>
		  <td>4族</td>
		  <td>5族</td>
		  <td>6族</td>
		  <td>7族</td>
		  <td>8族</td>
		  <td>9族</td>
		  <td>10族</td>
		  <td>11族</td>
		  <td>12族</td>
		  <td>13族</td>
		  <td>14族</td>
		  <td>15族</td>
		  <td>16族</td>
		  <td>17族</td>
		  <td>18族</td>
	  </tr>
	</thead>
	<tbody>
  <tr>
		<td>第1周期</td>
    <td class="not_metal"><span>1</span><span class="emp">H</span><span class="kitai">水素</span><span>1.008</span></td>
		<td colspan="1"></td>
		<td colspan="10" rowspan="3" class="desc_in_table">

      <div class="desc1">
        <table>
          <tbody><tr>
            <td><img src="./images/note1b.png" width="184" height="125" alt="" style="min-width:184px;"></td>
            <td>
              <ul>
                <li><span class="semicon-sample">&nbsp;</span>は半導体</li>
                <li>重要な元素の元素記号は濃い黒字にしてある。</li>
                <li>常温（20℃）での単体の状態<ul>
                  <li>元素名が<span style="color:var(--color-red)">赤</span>：気体</li>
                  <li>元素名が<span style="color:var(--color-blue)">青</span>：液体</li>
                  <li>元素名が黒：固体</li>
                  </ul></li>
                <li>[ ] をつけた原子量は、既知の同位体のうちよく知られたものの質量数である。</li>
              </ul>
            </td>
          </tr></tbody>
        </table>
      </div>

    </td>
		<td colspan="5"></td>
		<td class="noble_gas"><span>2</span><span class="emp">He</span><span class="kitai">ヘリウム</span><span>4.003</span></td>
	</tr>

  <tr>
		<td>第2周期</td>
		<td class="alkali_metal"><span>3</span><span class="emp">Li</span><span>リチウム</span><span>6.941</span></td>
		<td class="alkali_earth"><span>4</span><span class="emp">Be</span><span>ベリリウム</span><span>9.012</span></td>
    <!--<td colspan="10"></td>-->
		<td class="not_metal semicon"><span>5</span><span class="emp">B</span><span>ホウ素</span><span>10.81</span></td>
		<td class="not_metal semicon"><span>6</span><span class="emp">C</span><span>炭素</span><span>12.01</span></td>
		<td class="not_metal"><span>7</span><span class="emp">N</span><span class="kitai">窒素</span><span>14.01</span></td>
		<td class="not_metal"><span>8</span><span class="emp">O</span><span class="kitai">酸素</span><span>16.00</span></td>
		<td class="halogen"><span>9</span><span class="emp">F</span><span class="kitai">フッ素</span><span>19.00</span></td>
		<td class="noble_gas"><span>10</span><span class="emp">Ne</span><span class="kitai">ネオン</span><span>20.18</span></td>
	</tr>
  <tr>
		<td>第3周期</td>
		<td class="alkali_metal"><span>11</span><span class="emp">Na</span><span>ナトリウム</span><span>22.99</span></td>
		<td class="alkali_earth"><span>12</span><span class="emp">Mg</span><span>マグネシウム</span><span>24.31</span></td>
    <!--<td colspan="10"></td>-->
		<td class="metal"><span>13</span><span class="emp">Al</span><span>アルミニウム</span><span>26.98</span></td>
		<td class="not_metal semicon"><span>14</span><span class="emp">Si</span><span>ケイ素</span><span>28.09</span></td>
		<td class="not_metal semicon"><span>15</span><span class="emp">P</span><span>リン</span><span>30.97</span></td>
		<td class="not_metal"><span>16</span><span class="emp">S</span><span>硫黄</span><span>32.07</span></td>
		<td class="halogen"><span>17</span><span class="emp">Cl</span><span class="kitai">塩素</span><span>35.45</span></td>
		<td class="noble_gas"><span>18</span><span class="emp">Ar</span><span class="kitai">アルゴン</span><span>39.95</span></td>
	</tr>
    <tr>
		<td>第4周期</td>
		<td class="alkali_metal"><span>19</span><span class="emp">K</span><span>カリウム</span><span>39.10</span></td>
		<td class="alkali_earth"><span>20</span><span class="emp">Ca</span><span>カルシウム</span><span>40.08</span></td>
		<td class="metal"><span>21</span><span>Sc</span><span>スカンジウム</span><span>44.96</span></td>
		<td class="metal"><span>22</span><span>Ti</span><span>チタン</span><span>47.88</span></td>
		<td class="metal"><span>23</span><span>V</span><span>バナジウム</span><span>50.94</span></td>
		<td class="metal"><span>24</span><span class="emp">Cr</span><span>クロム</span><span>52.00</span></td>
		<td class="metal"><span>25</span><span class="emp">Mn</span><span>マンガン</span><span>54.94</span></td>
		<td class="metal"><span>26</span><span class="emp">Fe</span><span>鉄</span><span>55.85</span></td>
		<td class="metal"><span>27</span><span>Co</span><span>コバルト</span><span>58.93</span></td>
		<td class="metal"><span>28</span><span class="emp">Ni</span><span>ニッケル</span><span>58.69</span></td>
		<td class="metal"><span>29</span><span class="emp">Cu</span><span>銅</span><span>63.55</span></td>
		<td class="metal"><span>30</span><span class="emp">Zn</span><span>亜鉛</span><span>65.39</span></td>
		<td class="metal"><span>31</span><span>Ga</span><span>ガリウム</span><span>69.72</span></td>
		<td class="metal semicon"><span>32</span><span>Ge</span><span>ゲルマニウム</span><span>72.61</span></td>
		<td class="not_metal"><span>33</span><span>As</span><span>ヒ素</span><span>74.92</span></td>
		<td class="not_metal semicon"><span>34</span><span>Se</span><span>セレン</span><span>78.96</span></td>
		<td class="halogen"><span>35</span><span class="emp">Br</span><span class="ekitai">臭素</span><span>79.90</span></td>
		<td class="noble_gas"><span>36</span><span class="emp">Kr</span><span class="kitai">クリプトン</span><span>83.80</span></td>
	</tr>
    <tr>
		<td class="periodic_row">第5周期</td>
		<td class="alkali_metal"><span>37</span><span>Rb</span><span>ルビジウム</span><span>85.47</span></td>
		<td class="alkali_earth"><span>38</span><span>Sr</span><span>ストロンチウム</span><span>87.62</span></td>
		<td class="metal"><span>39</span><span>Y</span><span>イットリウム</span><span>88.91</span></td>
		<td class="metal"><span>40</span><span>Zr</span><span>ジルコニウム</span><span>91.22</span></td>
		<td class="metal"><span>41</span><span>Nb</span><span>ニオブ</span><span>92.91</span></td>
		<td class="metal"><span>42</span><span>Mo</span><span>モリブデン</span><span>95.94</span></td>
		<td class="metal"><span>43</span><span>Tc</span><span>テクネチウム</span><span>[99]</span></td>
		<td class="metal"><span>44</span><span>Ru</span><span>ルテニウム</span><span>101.1</span></td>
		<td class="metal"><span>45</span><span>Rh</span><span>ロジウム</span><span>102.9</span></td>
		<td class="metal"><span>46</span><span>Pd</span><span>パラジウム</span><span>106.4</span></td>
		<td class="metal"><span>47</span><span class="emp">Ag</span><span>銀</span><span>107.9</span></td>
		<td class="metal"><span>48</span><span>Cd</span><span>カドミウム</span><span>112.4</span></td>
		<td class="metal"><span>49</span><span>In</span><span>インジウム</span><span>114.8</span></td>
		<td class="metal"><span>50</span><span class="emp">Sn</span><span>スズ</span><span>118.7</span></td>
		<td class="metal"><span>51</span><span>Sb</span><span>アンチモン</span><span>121.8</span></td>
		<td class="not_metal semicon"><span>52</span><span>Te</span><span>テルル</span><span>127.6</span></td>
		<td class="halogen"><span>53</span><span class="emp">I</span><span>ヨウ素</span><span>126.9</span></td>
		<td class="noble_gas"><span>54</span><span class="emp">Xe</span><span class="kitai">キセノン</span><span>131.3</span></td>
	</tr>
    <tr>
		<td>第6周期</td>
		<td class="alkali_metal"><span>55</span><span>Cs</span><span>セシウム</span><span>132.9</span></td>
		<td class="alkali_earth"><span>56</span><span class="emp">Ba</span><span>バリウム</span><span>137.3</span></td>
    <td class="border1"><span>57～71</span><span></span><span class="type1">ランタノイド</span><span></span></td>
		<td class="metal"><span>72</span><span>Hf</span><span>ハフニウム</span><span>178.5</span></td>
		<td class="metal"><span>73</span><span>Ta</span><span>タンタル</span><span>180.9</span></td>
		<td class="metal"><span>74</span><span>W</span><span>タングステン</span><span>183.8</span></td>
		<td class="metal"><span>75</span><span>Re</span><span>レニウム</span><span>186.2</span></td>
		<td class="metal"><span>76</span><span>Os</span><span>オスミウム</span><span>190.2</span></td>
		<td class="metal"><span>77</span><span>Ir</span><span>イリジウム</span><span>192.2</span></td>
    <td class="metal"><span>78</span><span class="emp">Pt</span><span>白金</span><span>195.1</span></td>
    <td class="metal"><span>79</span><span class="emp">Au</span><span>金</span><span>197.0</span></td>
    <td class="metal"><span>80</span><span class="emp">Hg</span><span class="ekitai">水銀</span><span>200.6</span></td>
		<td class="metal"><span>81</span><span>Tl</span><span>タリウム</span><span>204.4</span></td>
		<td class="metal"><span>82</span><span class="emp">Pb</span><span>鉛</span><span>207.2</span></td>
		<td class="metal"><span>83</span><span>Bi</span><span>ビスマス　</span><span>209.0</span></td>
		<td class="metal"><span>84</span><span>Po</span><span>ポロニウム</span><span>[210]</span></td>
		<td class="halogen"><span>85</span><span>At</span><span>アスタチン</span><span>[210]</span></td>
    <td class="noble_gas"><span>86</span><span class="emp">Rn</span><span class="kitai">ラドン</span><span>[222]</span></td>
	</tr>
    <tr>
		<td>第7周期</td>
		<td class="alkali_metal"><span>87</span><span>Fr</span><span>フランシウム</span><span>[223]</span></td>
		<td class="alkali_earth"><span>88</span><span>Ra</span><span>ラジウム</span><span>[226]</span></td>
    <td class="border1"><span>89～103</span><span></span><span class="type1">アクチノイド</span><span></span></td>
		<td class="not_clue_metal"><span>104</span><span>Rf</span><span>ラザフォージウム</span><span>[267]</span></td>
		<td class="not_clue_metal"><span>105</span><span>Db</span><span>ドブニウム</span><span>[268]</span></td>
		<td class="not_clue_metal"><span>106</span><span>Sg</span><span>シーボーギウム</span><span>[271]</span></td>
		<td class="not_clue_metal"><span>107</span><span>Bh</span><span>ボーリウム</span><span>[272]</span></td>
		<td class="not_clue_metal"><span>108</span><span>Hs</span><span>ハッシウム</span><span>[277]</span></td>
		<td class="not_clue_metal"><span>109</span><span>Mt</span><span>マイトネリウム</span><span>[276]</span></td>
		<td class="not_clue_metal"><span>110</span><span>Ds</span><span>ダームスタチウム</span><span>[281]</span></td>
		<td class="not_clue_metal"><span>111</span><span>Rg</span><span>レントゲニウム</span><span>[280]</span></td>
		<td class="not_clue_metal"><span>112</span><span>Cn</span><span>コペルニシウム</span><span>[285]</span></td>
		<td class="not_clue_metal"><span>113</span><span class="emp">Nh</span><span>ニホニウム</span><span>[278]</span></td>
		<td class="not_clue_metal"><span>114</span><span>Fl</span><span>フレロビウム</span><span>[289]</span></td>
		<td class="not_clue_metal"><span>115</span><span>Mc</span><span>モスコビウム</span><span>[289]</span></td>
		<td class="not_clue_metal"><span>116</span><span>Lv</span><span>リバモリウム</span><span>[293]</span></td>
		<td class="not_clue_metal"><span>117</span><span>Ts</span><span>テネシン</span><span>[293]</span></td>
		<td class="not_clue_metal"><span>118</span><span>Og</span><span>オガネソン</span><span>[294]</span></td>
	</tr>
  </tbody>
</table>

<table id="periodic_table_sub" class="periodic_table2">
	<tbody>
    <tr>
		  <td class="border1">ランタノイド</td>
		  <td><span>57</span><span>La</span><span>ランタン</span><span>138.9</span></td>
		  <td><span>58</span><span>Ce</span><span>セリウム</span><span>140.1</span></td>
		  <td><span>59</span><span>Pr</span><span>プラセオジム</span><span>140.9</span></td>
		  <td><span>60</span><span>Nd</span><span>ネオジム</span><span>144.2</span></td>
		  <td><span>61</span><span>Pm</span><span>プロメチウム</span><span>[145]</span></td>
		  <td><span>62</span><span>Sm</span><span>サマリウム</span><span>150.4</span></td>
		  <td><span>63</span><span>Eu</span><span>ユウロピウム</span><span>152.0</span></td>
		  <td><span>64</span><span>Gd</span><span>ガドリニウム</span><span>157.3</span></td>
		  <td><span>65</span><span>Tb</span><span>テルビウム</span><span>158.9</span></td>
		  <td><span>66</span><span>Dy</span><span>ジスプロシウム</span><span>162.5</span></td>
		  <td><span>67</span><span>Ho</span><span>ホルミウム</span><span>164.9</span></td>
		  <td><span>68</span><span>Er</span><span>エルビウム</span><span>167.3</span></td>
		  <td><span>69</span><span>Tm</span><span>ツリウム</span><span>168.9</span></td>
		  <td><span>70</span><span>Yb</span><span>イッテルビウム</span><span>173.0</span></td>
		  <td><span>71</span><span>Lu</span><span>ルテチウム</span><span>175.0</span></td>
	  </tr>
    <tr>
		  <td class="border1">アクチノイド</td>
		  <td><span>89</span><span>Ac</span><span>アクチニウム</span><span>[227]</span></td>
		  <td><span>90</span><span>Th</span><span>トリウム</span><span>232.0</span></td>
		  <td><span>91</span><span>Pa</span><span>プロアクチニウム</span><span>231.0</span></td>
		  <td><span>92</span><span class="emp">U</span><span>ウラン</span><span>238.0</span></td>
		  <td><span>93</span><span>Np</span><span>ネプツニウム</span><span>[237]</span></td>
		  <td><span>94</span><span class="emp">Pu</span><span>プルトニウム</span><span>[239]</span></td>
		  <td><span>95</span><span>Am</span><span>アメリシウム</span><span>[243]</span></td>
		  <td><span>96</span><span>Cm</span><span>キュリウム</span><span>[247]</span></td>
		  <td><span>97</span><span>Bk</span><span>バークリウム</span><span>[247]</span></td>
		  <td><span>98</span><span>Cf</span><span>カリホルニウム</span><span>[252]</span></td>
		  <td><span>99</span><span>Es</span><span>アインスタイニウム</span><span>[252]</span></td>
		  <td><span>100</span><span>Fm</span><span>フェルミウム</span><span>[257]</span></td>
		  <td><span>101</span><span>Md</span><span>メンデレビウム</span><span>[258]</span></td>
		  <td><span>102</span><span>No</span><span>ノーベリウム</span><span>[259]</span></td>
		  <td><span>103</span><span>Lr</span><span>ローレンシウム</span><span>[262]</span></td>
	  </tr>
  </tbody>
</table>
</div>

<div id="note1">
  <div id="note1_1" class="overflow-auto">
    <table class="metal_legend">
      <tbody>
      <tr>
        <td class="not_metal">非金属</td>
        <td class="metal">金属</td>
        <td class="not_clue_metal">不明</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div id="note1_2" class="overflow-auto">
    <table class="metal_legend2">
      <tbody>
      <tr>
        <td class="alkali_metal">アルカリ金属</td>
        <td class="alkali_earth">アルカリ土類金属</td>
        <td class="halogen">ハロゲン</td>
        <td class="noble_gas">希ガス</td>
      </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="footer-note">
	* 元素記号・元素名のあたりをクリックすると Wikipedia の該当ページが開きます。
</div>

</body>
</html>
