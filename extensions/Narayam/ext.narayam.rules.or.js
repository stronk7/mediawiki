/**
 * Trasliteration regular expression rules table for Oriya
 * @author Junaid P V ([[user:Junaidpv]])
 * @date 2010-11-13
 * @credit With help from Subhashish Panigrahi
 * License: GPLv3, CC-BY-SA 3.0
 */
// Normal rules
var rules = [
['\\\\([A-Za-z\\>_~\\.0-9])', '\\\\','$1'],

['ଞ୍ଜ୍h', '', 'ଞ୍ଝ୍'],	// njh
['ଙ୍ଗ୍h', '', 'ଙ୍ଘ୍'],	// ngh

['([କ-ହୟ])୍a', '','$1'],
['([କ-ହୟ])(a|୍A)', '','$1ା'],
['([କ-ହୟ])୍i', '','$1\u0b3f'],
['([କ-ହୟ])୍I', '','$1ୀ'],
['([କ-ହୟ])୍u', '','$1\u0b41'],
['([କ-ହୟ])(୍U|\u0b41u)', '','$1\u0b42'],
['([କ-ହୟ])୍R', '','$1\u0b43'],
['([କ-ହୟ])\u0b43R', '','$1\u0b44'],
['([କ-ହୟ])୍ଳ୍l', '','$1ୢ'],
['([କ-ହୟ])ୢl', '','$1ୣ'],
['([କ-ହୟ])୍e', '','$1େ'],
['([କ-ହୟ])i', '','$1ୈ'],
['([କ-ହୟ])୍o', '','$1ୋ'],
['([କ-ହୟ])ୋu', '','$1ୌ'],
['([କ-ହୟ])୍E', '','$1\u0B48'],

['ଅa', '','ଆ'],
['(ଅi|ଏe)', '','ଐ'],
['(ଅu|ଓo|ଓO)', '','ଔ'],
['ଋR', '','ୠ'],
['ଳ୍l', '','ଌ'],
['ଌl', '','ୡ'],
['ଞ୍ଚ୍h', '', 'ଞ୍ଛ୍'],	// nch

['ଣ୍G', '', 'ଙ୍'],	// NG
['ଣ୍g', '', 'ଞ୍'],	// Ng
['କ୍h', '','ଖ୍'],
['ଗ୍h', '','ଘ୍'],
['ନ୍c', '', 'ଞ୍ଚ୍'],	// nc
['ନ୍g', '', 'ଙ୍ଗ୍'],	// ng
['ଚ୍h', '','ଛ୍'],
['ଜ୍h', '','ଝ୍'],
['ନ୍j', '', 'ଞ୍ଜ୍'],	// nj
['ନ୍k', '', 'ଙ୍କ୍'],	// nk
['ଟ୍h', '','ଠ୍'],
['ଡ୍h', '','ଢ୍'],
['ତ୍h', '','ଥ୍'],
['ଦ୍h', '','ଧ୍'],
['ପ୍h', '','ଫ୍'],
['ବ୍h', '','ଭ୍'],
['ସ୍h', '','ଷ୍'],
['।Z', '', '॥'],

['ଆ\\\\', '', '\u0B3E'], // aa sign
['ଇ\\\\', '', '\u0B3F'], // i sign
['ଈ\\\\', '', '\u0B40'],// I sign
['ଉ\\\\', '', '\u0B41'], // u sign
['ଉ\\\\', '', '\u0B42'], // U sign
['ଋ\\\\', '', '\u0B43'], // R sign
['ୠ\\\\', '', '\u0B44'], // RR sign
['ଌ\\\\', '', '\u0B62'], // L sign
['ୡ\\\\', '', '\u0B63'], // LL sign
['ଏ\\\\', '', '\u0B47'], // e sign
['ଐ\\\\', '', '\u0B48'], // ai sign
['ଓ\\\\', '', '\u0B4B'], // o sign
['ଔ\\\\', '', '\u0B4C'], // au sign

['\u200c?a', '','ଅ'],
['b', '','ବ୍'],
['c','','ଚ୍'],
['d', '','ଦ୍'],
['\u200c?e', '','ଏ'],
['f', '','ଫ୍'],
['g', '','ଗ୍'],
['h', '','ହ୍'],
['\u200c?i', '','ଇ'],
['j', '','ଜ୍'],
['k', '','କ୍'],
['l', '','ଲ୍'],
['m', '','ମ୍'],
['n', '','ନ୍'],
['\u200c?o', '','ଓ'],
['p', '','ପ୍'],
['q', '', 'ଜ୍ଞ୍'],
['r', '','ର୍'],
['s', '','ସ୍'],
['t', '','ତ୍'],
['\u200c?u', '','ଉ'],
['v', '', 'ୱ୍'],
['w', '','ଵ୍'],
['x', '','କ୍ଷ୍'],
['y', '', 'ୟ୍'],
['z', '','\u0B3C'],
['\u200c?A', '','ଆ'],
['B', '','ବ୍'],
['C', '','ଛ୍'],
['D', '','ଡ୍'],
['\u200c?E', '','ଐ'],
['F', '','ଫ୍'],
['G', '','ଗ୍'],
['H', '','ଃ'],
['\u200c?I', '','ଈ'],
['J', '','ଝ୍'],
['K', '','କ୍'],
['L', '','ଳ୍'],
['M', '','ଂ'],
['N', '','ଣ୍'],
['\u200c?O', '', 'ଔ'],
['P', '','ଫ୍'],
['Q', '', 'ଜ୍ଞ୍'],
['R', '','ଋ'],
['S', '','ଶ୍'],
['T', '','ଟ୍'],
['\u200c?U', '','ଊ'],
['V', '', 'ଵ୍'],
['W', '','ଵ୍ଵ୍'],
['X', '', 'ଁ'],
['Y', '','ଯ୍'],
['Z', '', '।'],
['\\~', '','୍'],
['//', '','ଽ'],
['_', '', '\u200c'],
['0', '','୦'],
['1', '','୧'],
['2', '','୨'],
['3', '','୩'],
['4', '','୪'],
['5', '','୫'],
['6', '','୬'],
['7', '','୭'],
['8', '','୮'],
['9', '','୯']
];

jQuery.narayam.addScheme( 'or', {
	'namemsg': 'narayam-or',
	'extended_keyboard': true,
	'lookbackLength': 4,
	'keyBufferLength': 2,
	'rules': rules
} );
