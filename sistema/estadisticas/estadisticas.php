<?php
    ///Pedimos el archivo que se conecte a la base de datos
    require_once 'db.php';
    $result;
 
    $conn = dbConnect();
    // Creamos la consulta (no se como se llame la tabla que contendra estos valores, pero este es un ejemplo)
    $sql = 'SELECT * FROM estadisticas';
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);
    // Extract the values from $result
    $rows = $result->fetchAll();
    // Since the values are an associative array we use foreach to extract the values from $rows
 ?>

<div class="content-panel">
  <h4><i class="fa fa-angle-right"></i>Estadisticas Generales</h4>
      <section id="unseen">
<table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Conferencia</th>
                <th>Equipo</th>
                <th>G</th>
                <th>P</th>
                <th>E</th>
                <th>%</th>
                <th>PF</th>
                <th>PC</th>
                <th>Puntos Netos</th>
                <th>Local</th>
                <th>Visitante</th>
                <th>Ultimos 5</th>
            </tr>
        </thead>
 
        <tbody>
            <tr>
                <th>AFC ESTE</th>
                <th>Buffalo Billls</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>96</th>
                <th>89</th>
                <th>7</th>
                <th>1-1</th>
                <th>2-1</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>AFC ESTE</th>
                <th>New England Patriots</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>123</th>
                <th>107</th>
                <th>16</th>
                <th>2-0</th>
                <th>1-2</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>AFC ESTE</th>
                <th>Miami Dolphins</th>
                <th>2</th>
                <th>2</th>
                <th>0</th>
                <th>.500</th>
                <th>96</th>
                <th>97</th>
                <th>-1</th>
                <th>1-1</th>
                <th>1-1</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>AFC ESTE</th>
                <th>New York Jets</th>
                <th>1</th>
                <th>4</th>
                <th>0</th>
                <th>.200</th>
                <th>79</th>
                <th>127</th>
                <th>-48</th>
                <th>1-2</th>
                <th>0-2</th>
                <th>0-3</th>
            </tr>
            <tr>
                <th>AFC NORTE</th>
                <th>Cincinnati Bengals</th>
                <th>3</th>
                <th>1</th>
                <th>0</th>
                <th>.750</th>
                <th>97</th>
                <th>76</th>
                <th>21</th>
                <th>2-0</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>AFC NORTE</th>
                <th>Baltimore Ravens</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>116</th>
                <th>80</th>
                <th>36</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>AFC NORTE</th>
                <th>Pittsburgh Steelers</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>114</th>
                <th>108</th>
                <th>6</th>
                <th>1-1</th>
                <th>2-1</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>AFC NORTE</th>
                <th>Cleveland Browns</th>
                <th>2</th>
                <th>2</th>
                <th>0</th>
                <th>.500</th>
                <th>103</th>
                <th>105</th>
                <th>-2</th>
                <th>1-1</th>
                <th>1-1</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>AFC SUR</th>
                <th>Indianapolis Colts</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>156</th>
                <th>108</th>
                <th>48</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>AFC SUR</th>
                <th>Houston Texans</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>104</th>
                <th>87</th>
                <th>17</th>
                <th>2-0</th>
                <th>1-2</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>AFC SUR</th>
                <th>Tennessee Titans</th>
                <th>1</th>
                <th>4</th>
                <th>0</th>
                <th>.200</th>
                <th>88</th>
                <th>139</th>
                <th>-51</th>
                <th>0-2</th>
                <th>1-2</th>
                <th>0-4</th>
            </tr>
            <tr>
                <th>AFC SUR</th>
                <th>Jacksonville Jaguars</th>
                <th>0</th>
                <th>5</th>
                <th>0</th>
                <th>.000</th>
                <th>67</th>
                <th>169</th>
                <th>-102</th>
                <th>0-2</th>
                <th>0-3</th>
                <th>0-4</th>
            </tr>
            <tr>
                <th>AFC OESSTE</th>
                <th>San Diego Chargers</th>
                <th>4</th>
                <th>1</th>
                <th>0</th>
                <th>.800</th>
                <th>133</th>
                <th>63</th>
                <th>70</th>
                <th>3-0</th>
                <th>1-1</th>
                <th>4-0</th>
            </tr>
            <tr>
                <th>AFC OESTE</th>
                <th>Denver Broncos</th>
                <th>3</th>
                <th>1</th>
                <th>0</th>
                <th>.750</th>
                <th>116</th>
                <th>87</th>
                <th>29</th>
                <th>3-0</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>AFC OESTE</th>
                <th>Kansas City Chiefs</th>
                <th>2</th>
                <th>3</th>
                <th>0</th>
                <th>.400</th>
                <th>119</th>
                <th>101</th>
                <th>18</th>
                <th>1-1</th>
                <th>1-2</th>
                <th>2-3</th>
            </tr>
            <tr>
                <th>AFC OESTE</th>
                <th>Oakland Raiders</th>
                <th>0</th>
                <th>4</th>
                <th>0</th>
                <th>.000</th>
                <th>51</th>
                <th>103</th>
                <th>-52</th>
                <th>0-2</th>
                <th>0-2</th>
                <th>0-4</th>
            </tr>

            <tr>
                <th>NFC ESTE</th>
                <th>Philadelphia Eagles</th>
                <th>4</th>
                <th>1</th>
                <th>0</th>
                <th>.800</th>
                <th>156</th>
                <th>132</th>
                <th>24</th>
                <th>3-0</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>NFC ESTE</th>
                <th>Dallas Cowboys</th>
                <th>4</th>
                <th>1</th>
                <th>0</th>
                <th>.800</th>
                <th>135</th>
                <th>103</th>
                <th>32</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>4-0</th>
            </tr>
            <tr>
                <th>NFC ESTE</th>
                <th>New York Giants</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>133</th>
                <th>111</th>
                <th>22</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>NFC ESTE</th>
                <th>Washington Redskins</th>
                <th>1</th>
                <th>4</th>
                <th>0</th>
                <th>.200</th>
                <th>112</th>
                <th>136</th>
                <th>-24</th>
                <th>1-2</th>
                <th>0-2</th>
                <th>1-3</th>
            </tr>
            <tr>
                <th>NFC NORTE</th>
                <th>Detroit Lions</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>99</th>
                <th>79</th>
                <th>20</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>2-2</th>
            </tr>
            <tr>
                <th>NFC NORTE</th>
                <th>Green Bay Packers</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>134</th>
                <th>106</th>
                <th>28</th>
                <th>2-0</th>
                <th>1-2</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>NFC NORTE</th>
                <th>Minnesota Vikings</th>
                <th>2</th>
                <th>3</th>
                <th>0</th>
                <th>.400</th>
                <th>101</th>
                <th>126</th>
                <th>-25</th>
                <th>1-1</th>
                <th>1-2</th>
                <th>2-3</th>
            </tr>
            <tr>
                <th>NFC NORTE</th>
                <th>Chicago Bears</th>
                <th>2</th>
                <th>3</th>
                <th>0</th>
                <th>.400</th>
                <th>116</th>
                <th>131</th>
                <th>-15</th>
                <th>0-2</th>
                <th>2-1</th>
                <th>2-3</th>
            </tr>
            <tr>
                <th>NFC SUR</th>
                <th>Carolina Panthers</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>104</th>
                <th>120</th>
                <th>-16</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>3-2</th>
            </tr>
            <tr>
                <th>NFC SUR</th>
                <th>Atlanta Falcons</th>
                <th>2</th>
                <th>3</th>
                <th>0</th>
                <th>.400</th>
                <th>151</th>
                <th>143</th>
                <th>8</th>
                <th>2-0</th>
                <th>0-3</th>
                <th>2-3</th>
            </tr>
            <tr>
                <th>NFC SUR</th>
                <th>New Orleans Saint</th>
                <th>2</th>
                <th>3</th>
                <th>0</th>
                <th>.400</th>
                <th>132</th>
                <th>141</th>
                <th>-9</th>
                <th>2-0</th>
                <th>0-3</th>
                <th>2-3</th>
            </tr>
            <tr>
                <th>NFC SUR</th>
                <th>Tampa Bay Buccaneers</th>
                <th>1</th>
                <th>4</th>
                <th>0</th>
                <th>.200</th>
                <th>103</th>
                <th>156</th>
                <th>-53</th>
                <th>0-2</th>
                <th>1-2</th>
                <th>1-4</th>
            </tr>
            <tr>
                <th>NFC OESTE</th>
                <th>Arizona Cardinals</th>
                <th>3</th>
                <th>1</th>
                <th>0</th>
                <th>.750</th>
                <th>86</th>
                <th>86</th>
                <th>0</th>
                <th>2-0</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>NFC OESTE</th>
                <th>Seattle Seahawks</th>
                <th>3</th>
                <th>1</th>
                <th>0</th>
                <th>.750</th>
                <th>110</th>
                <th>83</th>
                <th>27</th>
                <th>2-0</th>
                <th>1-1</th>
                <th>3-1</th>
            </tr>
            <tr>
                <th>NFC OESTE</th>
                <th>San Francisco 49ers</th>
                <th>3</th>
                <th>2</th>
                <th>0</th>
                <th>.600</th>
                <th>110</th>
                <th>106</th>
                <th>4</th>
                <th>2-1</th>
                <th>1-1</th>
                <th>3-2</th>
            </tr>
            <tr>
                <th>NFC OESTE</th>
                <th>St. Louis Rams</th>
                <th>1</th>
                <th>3</th>
                <th>0</th>
                <th>.250</th>
                <th>84</th>
                <th>119</th>
                <th>-35</th>
                <th>0-2</th>
                <th>1-1</th>
                <th>1-3</th>
            </tr>
        </tbody>
    </table>
    </section>
</div>