<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<style>
	/* css: cascading style sheet */
	h7{ /* 태그 선택자 */
		font-size:0.4em;
		display:block;
		font-weight:bold;
	}
	#header{
		background-color: orange;
	}
	#contents{ /* id 선택자 */
		background-color:cyan;
	}
	.ccc{ /* 클래스 선택자 */

	}
	</style>
	</head>
	<body>
		<div id="header">
		<h1>제목1</h1>
		<h2>제목2</h2>
		<h3>제목3</h3>
		<h4>제목4</h4>
		<h5>제목5</h5>
		<h6>제목6</h6>
		<h7>제목7</h7>
		안녕하세요
		여러분
		</div>
		<div id="contents">
		컨텐츠 부분입니다.
        <img src="bigdata.jpeg">
		<a href="index1.php">이전 페이지로 가기</a>
        <ul>
            <li>빅데이터경영통계 전공</li>
            <li>NLP 기반의 딥러닝 전공</li>
            <li>언어기반 빅데이터 마이닝</li>
            <li>SNS 빅데이터 기반 트렌드 분석</li>
            <li>주력분야</li>
            <li>
                <ol>
                    <li>TF기반 CNN,RNN,Custom</li>
                    <li>통계기반 데이터 마이닝</li>
                    <li>XGboost, LGBM 전문</li>
                    <li>DataWH 구축경험 SQL RDBMS</li>
                    <li>웹스크래이핑 활용 트렌드 분석 보고</li>
                    <li>Web APP 개발</li>
                    <li></li>
                </ol>
            </li>
        </ul>
		</div>
		<div id="footer">
			copyrights 2021 Jo Gye Cheol
		</div>
	</body>
</html>