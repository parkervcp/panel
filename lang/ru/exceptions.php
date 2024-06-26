<?php

return [
    'daemon_connection_failed' => 'При попытке связи с узлом произошла ошибка HTTP/:code. Информация была передана администрации. (идентификатор запроса: :request_id)',
    'node' => [
        'servers_attached' => 'Узел не должен иметь подключенных к нему серверов, чтобы быть удален.',
        'daemon_off_config_updated' => 'Конфигурация демона <strong>была обновлена</strong>, но при попытке автоматического обновления конфигурационного файла произошла ошибка. Вам нужно вручную обновить конфигурационный файл (config.yml) для применения этих изменений.',
    ],
    'allocations' => [
        'server_using' => 'Сервер в настоящее время назначается для этого размещения. Распределение может быть удалено, только если ни один сервер не назначен.',
        'too_many_ports' => 'Добавление более 1000 портов в одном диапазоне за раз не поддерживается.',
        'invalid_mapping' => 'Сопоставление, предоставленное для порта {port}, было недопустимым и не могло быть обработано.',
        'cidr_out_of_range' => 'Нотация CIDR допускает только маски между /25 и /32.',
        'port_out_of_range' => 'Порты в распределении должны быть больше 1024 и меньше или равны 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'Яйцо с подключенными к нему серверами не может быть удалено из панели.',
        'invalid_copy_id' => 'Яйцо, выбранное для копирования сценария, либо не существует, либо копирует сценарий из самого себя.',
        'has_children' => 'Это яйцо является родительским для одного или нескольких других яиц. Пожалуйста, удалите эти яйца, прежде чем удалять это яйцо.',
    ],
    'variables' => [
        'env_not_unique' => 'Переменная окружения :name должна быть уникальной для этого яйца.',
        'reserved_name' => 'Переменная окружения :name защищена и не может быть назначена переменной.',
        'bad_validation_rule' => 'Правило проверки ":rule" не является правилом для этого приложения.',
    ],
    'importer' => [
        'json_error' => 'Произошла ошибка при попытке разобрать файл JSON: :error.',
        'file_error' => 'Указанный JSON файл недействителен.',
        'invalid_json_provided' => 'Предоставленный файл JSON не имеет формата, который можно распознать.',
    ],
    'subusers' => [
        'editing_self' => 'Редактирование вашей учетной записи подпользователя запрещено.',
        'user_is_owner' => 'Вы не можете добавить владельца сервера в качестве субпользователя для этого сервера.',
        'subuser_exists' => 'Пользователь с таким адресом электронной почты уже назначен в качестве субпользователя для этого сервера.',
    ],
    'databases' => [
        'delete_has_databases' => 'Невозможно удалить сервер хоста базы данных, на котором есть активные базы данных.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Максимальное время интервала для связанной задачи составляет 15 минут.',
    ],
    'locations' => [
        'has_nodes' => 'Невозможно удалить местоположение, в котором к нему прикреплены активные узлы.',
    ],
    'users' => [
        'node_revocation_failed' => 'Не удалось отозвать ключи на <a href=":link">узле #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes satisfying the requirements specified for automatic deployment could be found.',
        'no_viable_allocations' => 'Не найдено ни одного распределения, удовлетворяющего требованиям для автоматического развертывания на этом узле.',
    ],
    'api' => [
        'resource_not_found' => 'Запрашиваемый ресурс не существует на сервере.',
    ],
];
