# test-pocker

###Ejercicio
Escribir una funcion	que	determine	si	un	conjunto	de	cartas	de	una	lista	representan	una	escalera	de	poker	(5 cartas	con	valores	consecutivos)	o	no.

Las	cartas	siempre	tienen	valores	entre	2	y	14,	donde	14	es	el	AS. Tener	en	cuenta	que	el	AS	tambien	cuenta	como	1. La	cantidad	de	cartas	puede	variar,	pero	nunca	es	superior	a	7.

#####Ejemplos:
```
escalera: 14-2-3-4-5 
escalera: 9-10-11-12-13 
escalera: 2-7-8-5-10-9-11 
no es escalera:	7-8-12-13-14
```

#####Test case
La	funcion	debe	validar	un	caso	de	pruebas	similar	a	este:

```
class	Poker	extends	TestCase 
{				
    public function testAlgorithm() {						
        $results1 = isStraight([2,	3,	4	,5,	6]);						
        $this->assertEquals($results1,	true,	"2,	3,	4	,5,	6");
        
        $results2 = isStraight([14,	5,	4	,2,	3]);						
        $this->assertEquals($results2,	true,	"14,	5,	4	,2,	3");
        
        $results3 = isStraight([7,	7,	12	,11,	3,	4,	14]);						
        $this->assertEquals($results3,	false,	"7,	7,	12	,11,	3,	4,	14");
        
        $results4 = isStraight([7,	3,	2]);						
        $this->assertEquals($results4,	false,	"7,	3,	2");				
    } 
}
```