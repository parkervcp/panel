<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'כתובת ה-FQDN או ה-IP שסופקו אינם פונים לכתובת IP חוקית.',
        'fqdn_required_for_ssl' => 'דרוש שם דומיין מוסמך במלואו שמגיע לכתובת IP ציבורית כדי להשתמש ב-SSL עבור צומת זה.',
    ],
    'notices' => [
        'allocations_added' => 'הקצאות נוספו בהצלחה לצומת זה.',
        'node_deleted' => 'הצומת הוסר מהחלונית בהצלחה.',
        'node_created' => 'צומת חדש נוצר בהצלחה. אתה יכול להגדיר באופן אוטומטי את הדמון במחשב זה על ידי ביקור בכרטיסייה \'תצורה\'. <strong>לפני שתוכל להוסיף שרתים, תחילה עליך להקצות לפחות כתובת IP אחת ויציאה אחת.</strong>',
        'node_updated' => 'מידע הצומת עודכן. אם הגדרות דמון כלשהן שונו, תצטרך לאתחל אותה כדי שהשינויים האלה ייכנסו לתוקף.',
        'unallocated_deleted' => 'מחק את כל היציאות שלא הוקצו עבור <code>:ip</code>.',
    ],
];
