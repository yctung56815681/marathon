<?php

use Illuminate\Database\Seeder;

function checkTWId($id)
{
    if (preg_match("/^[A-Z][12][0-9]{8}$/", $id)) {
        $letters = "ABCDEFGHJKLMNPQRSTUVXYWZIO";
        $c1 = substr($id, 0, 1);
        $n12 = strpos($letters, $c1) + 10;
        $n1 = (int) ($n12 / 10);
        $n2 = $n12 % 10;

        $n3 = substr($id, 1, 1);
        $n4 = substr($id, 2, 1);
        $n5 = substr($id, 3, 1);
        $n6 = substr($id, 4, 1);
        $n7 = substr($id, 5, 1);
        $n8 = substr($id, 6, 1);
        $n9 = substr($id, 7, 1);
        $n10 = substr($id, 8, 1);
        $n11 = substr($id, 9, 1);

        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        return $sum % 10 == 0;
    }
    return false;
}

function createTWIdByBoth($gender, $area)
{
    $tempId = $area;
    $tempId .= $gender ? '1' : '2';
    for ($i = 0; $i < 7; $i++) {
        $tempId .= rand(0, 9);
    }
    for ($i = 0; $i < 10; $i++) {
        if (checkTWId($tempId . $i)) {
            $tempId .= $i;
            break;
        }
    }
    return $tempId;
}

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('members')->get()->count() == 0) {
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'A'),
                'memberName' => '陳大明',
                'memberGender' => '男',
                'memberYear' => '73',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '大安區',
                'memberAddr' => '市府路1號',
                'memberEmail' => 'daming@yahoo.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '陳阿福',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'B'),
                'memberName' => '周偉玲',
                'memberGender' => '女',
                'memberYear' => '74',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '汐止區',
                'memberAddr' => '汐止路1號',
                'memberEmail' => 'dafong@hotmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '周阿偉',
                'memberEmergencyRelationship' => '父子',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'C'),
                'memberName' => '王陳金寶',
                'memberGender' => '男',
                'memberYear' => '45',
                'memberMonth' => '5',
                'memberDay' => '6',
                'memberCity' => '基隆市',
                'memberTown' => '暖暖區',
                'memberAddr' => '源遠路1號',
                'memberEmail' => 'wangbeauty@gmail.com',
                'memberMobile' => '0955-555-555',
                'memberEmergencyContact' => '王美滿',
                'memberEmergencyRelationship' => '姊妹',
                'memberEmergencyMobile' => '0966-666-666',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'D'),
                'memberName' => '張小華',
                'memberGender' => '女',
                'memberYear' => '74',
                'memberMonth' => '7',
                'memberDay' => '8',
                'memberCity' => '桃園市',
                'memberTown' => '大園區',
                'memberAddr' => '機場路2號',
                'memberEmail' => 'xinfa@yahoo.com',
                'memberMobile' => '0977-777-777',
                'memberEmergencyContact' => '張美華',
                'memberEmergencyRelationship' => '母女',
                'memberEmergencyMobile' => '0988-888-888',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'E'),
                'memberName' => '李偉偉',
                'memberGender' => '男',
                'memberYear' => '79',
                'memberMonth' => '9',
                'memberDay' => '10',
                'memberCity' => '新竹縣',
                'memberTown' => '竹北市',
                'memberAddr' => '竹科路',
                'memberEmail' => 'way2@yam.com',
                'memberMobile' => '0999-999-999',
                'memberEmergencyContact' => '李華華',
                'memberEmergencyRelationship' => '父子',
                'memberEmergencyMobile' => '0900-000-000',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'F'),
                'memberName' => '陳偉婷',
                'memberGender' => '女',
                'memberYear' => '86',
                'memberMonth' => '11',
                'memberDay' => '12',
                'memberCity' => '苗栗縣',
                'memberTown' => '苗栗區',
                'memberAddr' => '市府路2',
                'memberEmail' => 'wayting@gmail.com',
                'memberMobile' => '0910-123-456',
                'memberEmergencyContact' => '陳美玉',
                'memberEmergencyRelationship' => '姊妹',
                'memberEmergencyMobile' => '0920-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'G'),
                'memberName' => '歐陽裕隆',
                'memberGender' => '男',
                'memberYear' => '87',
                'memberMonth' => '1',
                'memberDay' => '3',
                'memberCity' => '台中市',
                'memberTown' => '大里區',
                'memberAddr' => '國光路1號',
                'memberEmail' => 'unolon@outlook.com',
                'memberMobile' => '0930-123-456',
                'memberEmergencyContact' => '何達欣',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0940-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'H'),
                'memberName' => '王億玲',
                'memberGender' => '女',
                'memberYear' => '88',
                'memberMonth' => '5',
                'memberDay' => '7',
                'memberCity' => '彰化縣',
                'memberTown' => '彰化區',
                'memberAddr' => '章山路2號',
                'memberEmail' => 'yeda@yahoo.com',
                'memberMobile' => '0950-123-456',
                'memberEmergencyContact' => '王興農',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0960-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'I'),
                'memberName' => '黃俊國',
                'memberGender' => '男',
                'memberYear' => '89',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '埔里區',
                'memberAddr' => '水源路2號',
                'memberEmail' => 'jungo@gmil.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '王麗雲',
                'memberEmergencyRelationship' => '母子',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'J'),
                'memberName' => '陳怡蓉',
                'memberGender' => '女',
                'memberYear' => '89',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '南投縣',
                'memberTown' => '東區',
                'memberAddr' => '中正路1號',
                'memberEmail' => 'yulong@gmail.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '王建均',
                'memberEmergencyRelationship' => '父女',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'K'),
                'memberName' => '林曉華',
                'memberGender' => '男',
                'memberYear' => '81',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '信義區',
                'memberAddr' => '市府路34號',
                'memberEmail' => 'a4456@hotmail.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '林偉庭',
                'memberEmergencyRelationship' => '姊弟',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'L'),
                'memberName' => '吳春美',
                'memberGender' => '女',
                'memberYear' => '82',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '萬芳區',
                'memberAddr' => '中山路2號',
                'memberEmail' => 'yao@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '陳琬玉',
                'memberEmergencyRelationship' => '母子',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'M'),
                'memberName' => '張阿傑',
                'memberGender' => '男',
                'memberYear' => '83',
                'memberMonth' => '5',
                'memberDay' => '6',
                'memberCity' => '基隆市',
                'memberTown' => '中區',
                'memberAddr' => '中正路2號',
                'memberEmail' => '5566778@yahoo.com',
                'memberMobile' => '0955-555-555',
                'memberEmergencyContact' => '張大明',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0966-666-666',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'N'),
                'memberName' => '陳茉莉',
                'memberGender' => '女',
                'memberYear' => '84',
                'memberMonth' => '7',
                'memberDay' => '8',
                'memberCity' => '桃園市',
                'memberTown' => '中區',
                'memberAddr' => '國華街5號',
                'memberEmail' => 'lili@gmail.com',
                'memberMobile' => '0977-777-777',
                'memberEmergencyContact' => '陳牡丹',
                'memberEmergencyRelationship' => '姊妹',
                'memberEmergencyMobile' => '0988-888-888',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'O'),
                'memberName' => '吳宗明',
                'memberGender' => '男',
                'memberYear' => '75',
                'memberMonth' => '9',
                'memberDay' => '10',
                'memberCity' => '新竹市',
                'memberTown' => '中區',
                'memberAddr' => '中山路五段2號',
                'memberEmail' => 'ming@gmaul.com',
                'memberMobile' => '0999-999-999',
                'memberEmergencyContact' => '吳奇隆',
                'memberEmergencyRelationship' => '父子',
                'memberEmergencyMobile' => '0900-000-000',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'P'),
                'memberName' => '陳昱華',
                'memberGender' => '女',
                'memberYear' => '86',
                'memberMonth' => '11',
                'memberDay' => '12',
                'memberCity' => '苗栗縣',
                'memberTown' => '北區',
                'memberAddr' => '華南路二段64巷3號',
                'memberEmail' => 'wuwu@gmail.com',
                'memberMobile' => '0910-123-456',
                'memberEmergencyContact' => '王昱婷',
                'memberEmergencyRelationship' => '母女',
                'memberEmergencyMobile' => '0920-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'Q'),
                'memberName' => '陳建隆',
                'memberGender' => '男',
                'memberYear' => '87',
                'memberMonth' => '1',
                'memberDay' => '3',
                'memberCity' => '台中市',
                'memberTown' => '西屯區',
                'memberAddr' => '朝馬二街64巷2弄1號',
                'memberEmail' => 'long@gmail.com',
                'memberMobile' => '0930-123-456',
                'memberEmergencyContact' => '陳建明',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0940-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'R'),
                'memberName' => '蔡林美',
                'memberGender' => '女',
                'memberYear' => '58',
                'memberMonth' => '5',
                'memberDay' => '7',
                'memberCity' => '彰化縣',
                'memberTown' => '西區',
                'memberAddr' => '中山路五段35號',
                'memberEmail' => 'mama@yahoo.com',
                'memberMobile' => '0950-123-456',
                'memberEmergencyContact' => '蔡忠明',
                'memberEmergencyRelationship' => '姊弟',
                'memberEmergencyMobile' => '0960-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'S'),
                'memberName' => '蔡偉庭',
                'memberGender' => '男',
                'memberYear' => '69',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '屏東縣',
                'memberTown' => '東港鎮',
                'memberAddr' => '五福路一段21號',
                'memberEmail' => 'kii@gmail.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '李偉華',
                'memberEmergencyRelationship' => '母子',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'T'),
                'memberName' => '史明絜',
                'memberGender' => '女',
                'memberYear' => '89',
                'memberMonth' => '9',
                'memberDay' => '11',
                'memberCity' => '台南市',
                'memberTown' => '西區',
                'memberAddr' => '海安路35號',
                'memberEmail' => 'jiji@hotmail.com',
                'memberMobile' => '0970-123-456',
                'memberEmergencyContact' => '李玉美',
                'memberEmergencyRelationship' => '母女',
                'memberEmergencyMobile' => '0980-123-456',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'U'),
                'memberName' => '吳何太',
                'memberGender' => '男',
                'memberYear' => '81',
                'memberMonth' => '1',
                'memberDay' => '2',
                'memberCity' => '台北市',
                'memberTown' => '西區',
                'memberAddr' => '元福路一段35號',
                'memberEmail' => 'jhkk@yahoo.com',
                'memberMobile' => '0911-111-111',
                'memberEmergencyContact' => '蔡美英',
                'memberEmergencyRelationship' => '母子',
                'memberEmergencyMobile' => '0922-222-222',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'V'),
                'memberName' => '陳奕廷',
                'memberGender' => '女',
                'memberYear' => '82',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '高雄市',
                'memberTown' => '苓雅區',
                'memberAddr' => '中山路二段35巷2號',
                'memberEmail' => 'ting@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '陳美雲',
                'memberEmergencyRelationship' => '姊弟',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'W'),
                'memberName' => '吳明豐',
                'memberGender' => '男',
                'memberYear' => '62',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '東區',
                'memberAddr' => '國光東路5段1號',
                'memberEmail' => '0939vool@hotmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '吳明偉',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'X'),
                'memberName' => '李美惠',
                'memberGender' => '女',
                'memberYear' => '56',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '東區',
                'memberAddr' => '東山路1段24巷2弄1號',
                'memberEmail' => 'mafji@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '王阿龍',
                'memberEmergencyRelationship' => '夫妻',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'Y'),
                'memberName' => '高健龍',
                'memberGender' => '男',
                'memberYear' => '82',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '嘉義市',
                'memberTown' => '西區',
                'memberAddr' => '中山路五段2巷3號',
                'memberEmail' => '0939@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '高明山',
                'memberEmergencyRelationship' => '父子',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'Z'),
                'memberName' => '蔡明潔',
                'memberGender' => '女',
                'memberYear' => '64',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '新北市',
                'memberTown' => '北區',
                'memberAddr' => '市府路2號',
                'memberEmail' => '0929@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '蔡明隆',
                'memberEmergencyRelationship' => '父女',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'A'),
                'memberName' => '張金保',
                'memberGender' => '男',
                'memberYear' => '45',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '高雄市',
                'memberTown' => '苓雅區',
                'memberAddr' => '中正路一段23號',
                'memberEmail' => 'may@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '張金龍',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'B'),
                'memberName' => '劉幼婷',
                'memberGender' => '女',
                'memberYear' => '66',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '南投縣',
                'memberTown' => '信義鄉',
                'memberAddr' => '中山路一號',
                'memberEmail' => 'YAO@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '劉保佑',
                'memberEmergencyRelationship' => '父女',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'C'),
                'memberName' => '張明潔',
                'memberGender' => '女',
                'memberYear' => '82',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '台東縣',
                'memberTown' => '北區',
                'memberAddr' => '中興路2號',
                'memberEmail' => 'juu@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '蔡春妹',
                'memberEmergencyRelationship' => '母女',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'D'),
                'memberName' => '李東福',
                'memberGender' => '男',
                'memberYear' => '67',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '花蓮縣',
                'memberTown' => '花蓮市',
                'memberAddr' => '市府路1號',
                'memberEmail' => 'donfu@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '李逸婷',
                'memberEmergencyRelationship' => '夫妻',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'E'),
                'memberName' => '吳明春',
                'memberGender' => '女',
                'memberYear' => '62',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '嘉義縣',
                'memberTown' => '太保市',
                'memberAddr' => '市府路2號',
                'memberEmail' => 'chuchu@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '蔡坤龍',
                'memberEmergencyRelationship' => '夫妻',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'F'),
                'memberName' => '蔡玲',
                'memberGender' => '女',
                'memberYear' => '62',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '台南市',
                'memberTown' => '東區',
                'memberAddr' => '市府路2號',
                'memberEmail' => 'chuchu@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '蔡坤龍',
                'memberEmergencyRelationship' => '父女',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(true, 'G'),
                'memberName' => '董四寶',
                'memberGender' => '男',
                'memberYear' => '32',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '嘉義縣',
                'memberTown' => '太保市',
                'memberAddr' => '市府路3號',
                'memberEmail' => 'baodo@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '董三寶',
                'memberEmergencyRelationship' => '兄弟',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
            DB::table('members')->insert([
                'memberTwId' => createTWIdByBoth(false, 'H'),
                'memberName' => '李寶春',
                'memberGender' => '女',
                'memberYear' => '62',
                'memberMonth' => '3',
                'memberDay' => '4',
                'memberCity' => '屏東縣',
                'memberTown' => '北區',
                'memberAddr' => '東明路2號',
                'memberEmail' => 'chuchu@gmail.com',
                'memberMobile' => '0933-333-333',
                'memberEmergencyContact' => '林春龍',
                'memberEmergencyRelationship' => '夫妻',
                'memberEmergencyMobile' => '0944-444-444',
            ]);
        }
    }
}