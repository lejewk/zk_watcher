# Zookeeper watcher as configuration 
- zookeeper 를 configruration 으로 활용하는 예제 입니다.
- 중간에 캐시를 두어 비즈니스로직에 조금? 더 집중하게 합니다.
- watcher 는 znode 의 특정 경로를 감시합니다.
- 변경이 발생될 경우 watcher 는 handler 를 작동시켜 캐시에 값을 갱신합니다.
- App 은 항상 캐시로부터 설정 정보를 획득할수 있습니다.

> :warning: 디테일한 lifecycle이 정의되지 않았습니다. 어디까지나 예제.

# build base image (pre-required)
기본 이미지를 미리 빌드해주세요.
> :warning: docker repo 의 lejewk 경로에는 해당 이미지가 없습니다.
``` bash
cd zk_base_image
docker build -t lejewk/zk_base_image:latest .
```

# docker-compose
``` bash
# run
docker-compose up -d
```

# 네임스페이스 추가 및 변경
``` bash
# zk_manager 접속
docker exec -it zookeeper_zk_manager_1 bash

# zkCli로 주키퍼 앙상블 접속
/opt/apache-zookeeper-3.5.6-bin/bin/zkCli.sh -server zoo1:2181

# 네임스페이스에 데이터 저장 또는 갱신
create /data_source '{"host":"localhost"}'
```

# 확인
http://localhost:8082

# zk_watcher 에 대해서
아래 경로의 java 코드를 그대로 jar로 만들었습니다.
https://zookeeper.apache.org/doc/r3.4.13/javaExample.html#sc_completeSourceCode

**실행 예시**
``` bash
java -jar javawatcher.jar {host}:{port} {namespace} {output_file_path} {execute_file_path}

# param desc
# {host}: 주키퍼 서버가 실행되는 호스트
# {port}: 주키퍼 서버가 실행되는 포트
# {namespace}: 감시하고자 하는 경로
# {output_file_path}: 네임스페이스 변경 정보를 저장하는 파일 경로
# {execute_file_path}: 네임스페이스 변경시 실행할 파일
```
